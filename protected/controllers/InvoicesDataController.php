<?php

class InvoicesDataController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('index', 'view', 'create', 'update', 'delete'),
				'roles'=>array('unit_admin'),
			),
			array('allow',
				'actions'=>array('admin','adminIndex','adminView'),
				'roles'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id, $iid)
	{
		$invoice = Invoices::model()->findByPk($iid);
		$object = $invoice->object;
		$params = array('unit_id'=>$object->unit_id);
		
		if(Yii::app()->user->checkAccess('manageOwnData', $params))
		{
			$this->render('view',array(
				'model'=>$this->loadModel($id),
				'iid'=>$iid,
				'invoice'=>$invoice,
			));
		}
		else
		{
			throw new CHttpException(403,'Brak uprawnień do wykonania operacji.');
		}
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{
		$invoice = Invoices::model()->findByPk($id);
		if($invoice->status != 1)
		{
			$object = $invoice->object;
			$params = array('unit_id'=>$object->unit_id);
		
			if(Yii::app()->user->checkAccess('manageOwnData', $params))
			{
				$model=new InvoicesData;
				//$invoices = $this->getInvoices();
				$tariffsComponents = $this->getTariffsComponents($id);
				
				// Uncomment the following line if AJAX validation is needed
				$this->performAjaxValidation($model);
	
				if(isset($_POST['InvoicesData']))
				{
					$model->attributes=$_POST['InvoicesData'];
					if($model->save())
					{
						$invoice->status = 0;
						if($invoice->save())
							$this->redirect(array('view','id'=>$model->id, 'iid'=>$id));
					}
				}

				$this->render('create',array(
					'model'=>$model,
					'iid'=>$id,
					//'invoices'=>$invoices,
					'tariffsComponents'=>$tariffsComponents,
				));
			}
			else
			{
				throw new CHttpException(403,'Brak uprawnień do wykonania operacji.');
			}
		}
		else
		{
			throw new CHttpException(423, 'Faktura została już zaakceptowana.');
		}
		
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id, $iid)
	{
		$invoice = Invoices::model()->findByPk($iid);
		if($invoice->status != 1) //fv zaakceptowana
		{
			$object = $invoice->object;
			$params = array('unit_id'=>$object->unit_id);
		
			if(Yii::app()->user->checkAccess('manageOwnData', $params))
			{
				$model=$this->loadModel($id);
				$tariffsComponents = $this->getTariffsComponents($iid);
				// Uncomment the following line if AJAX validation is needed
				$this->performAjaxValidation($model);
	
				if(isset($_POST['InvoicesData']))
				{
					$model->attributes=$_POST['InvoicesData'];
					if($model->save())
					{
						$invoice->status = 0;
						if($invoice->save())
							$this->redirect(array('view','id'=>$model->id, 'iid'=>$iid));
					}
				}

				$this->render('update',array(
					'model'=>$model,
					'iid'=>$iid,
					'tariffsComponents'=>$tariffsComponents,
				));
			}
			else
			{
				throw new CHttpException(403,'Brak uprawnień do wykonania operacji.');
			}	
		}
		else
		{
			throw new CHttpException(423, 'Faktura została już zaakceptowana.');
		}
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id, $iid)
	{
		$invoice = Invoices::model()->findByPk($iid);
		if($invoice->status != 1)
		{
			$object = $invoice->object;
			$params = array('unit_id'=>$object->unit_id);
			
			if(Yii::app()->user->checkAccess('manageOwnData', $params))
			{
				$this->loadModel($id)->delete();
				//$this->redirect(array('invoicesdata/index', 'iid'=>$iid));
				// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
				if(!isset($_GET['ajax']))
					$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index', 'iid' => $iid));//invoicesData/index
			}
			else
			{
				throw new CHttpException(403,'Brak uprawnień do wykonania operacji.');
			}	
		}
		else
		{
			throw new CHttpException(423, 'Faktura została już zaakceptowana.');
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex($iid)
	{
		$invoice = Invoices::model()->findByPk($iid);
		$data = Yii::app()->db->createCommand('select ids.id, ids.invoice_id, t.name as tariff, (select name from tariffs_components tc where tc.id = ids.component_id) as component, ids.value, ids.create_date from invoices_data ids join invoices i on ids.invoice_id = i.id join tariffs t on i.tariff_id = t.id where ids.invoice_id = '.$iid.' and i.object_id in (select o.id from objects o where o.unit_id = '.Yii::app()->user->getState('unit_id').')')->queryAll();
		$dataProvider = new CArrayDataProvider($data);
		$this->render('index',array(
			'iid'=>$iid,
			'invoice'=>$invoice,
			//'accepted'=>($invoice->status == 1) ? true : false,
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionAdminIndex($id)
	{
		$data = Yii::app()->db->createCommand('select ids.id, ids.invoice_id, t.name as tariff, (select name from tariffs_components tc where tc.id = ids.component_id) as component, ids.value, ids.create_date from invoices_data ids join invoices i on ids.invoice_id = i.id join tariffs t on i.tariff_id = t.id where ids.invoice_id = '.$id)->queryAll();
		$dataProvider = new CArrayDataProvider($data);
		$this->render('admin/index',array(
			'id'=>$id,
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionAdminView($id, $iid)
	{
		$this->render('admin/view',array(
			'model'=>$this->loadModel($id),
			'iid'=>$iid,
		));
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new InvoicesData('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['InvoicesData']))
			$model->attributes=$_GET['InvoicesData'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=InvoicesData::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='invoices-data-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	/*protected function getInvoices()
	{
		$invoices = array();
		$invoicesModel = Invoices::model()->findAllBySql('select i.id, i.issue_date from invoices i where i.object_id in (select o.id from objects o where o.unit_id='.Yii::app()->user->getState('unit_id').')');
		foreach($invoicesModel as $i)
			$invoices[$i->id] = $i->issue_date;
		return $invoices;
	}*/
	
	protected function getTariffsComponents($invoiceId)
	{
		$invoice = Invoices::model()->findByPk($invoiceId);
		$tariffsComponents = array();
		$tariffsComponentsModel = TariffsComponents::model()->findAllBySql('select tc.id, tc.name from tariffs_components tc where tc.tariff_id='.$invoice->tariff_id);//TariffsComponents::model()->findAll(); // findBySql -> only components for known tariff id
		foreach($tariffsComponentsModel as $tc)
			$tariffsComponents[$tc->id] = $tc->name;
		return $tariffsComponents;
	}
}
