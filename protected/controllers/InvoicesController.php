<?php

class InvoicesController extends Controller
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
			'ajaxOnly + dynamicTariffs',
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
				'actions'=>array('index', 'view', 'create', 'update', 'delete', 'dynamicTariffs'),
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
	public function actionView($id)
	{
		$model=$this->loadModel($id);
		$object = Objects::model()->findByPk($model->object_id);
		$params = array('unit_id'=>$object->unit_id);
		
		if(Yii::app()->user->checkAccess('manageOwnData', $params))
		{
			$statuses=$this->getStatuses();
			$this->render('view',array(
				'model'=>$model,
				'statuses'=>$statuses,
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
	public function actionCreate()
	{
		$model=new Invoices;
		
		$objects = $this->getObjects();
		$suppliers = $this->getSuppliers();
		$tariffs = $this->getTariffs();
		$statuses = $this->getStatuses();
		
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Invoices']))
		{
			$model->attributes=$_POST['Invoices'];
			$file_src=CUploadedFile::getInstance($model, 'file_src');
			
			$path = Yii::app()->basePath.'/../invs/'.Yii::app()->user->getState('unit_id').'/'.$model->object_id.'/';
			if(!is_dir($path))
			{
				mkdir($path, 0755, true);
			}
			
			$fileName = $model->supplier_id.'_'.$model->tariff_id.'_'.time().'_';
			
			if(($model->period_since!=='') && ($model->period_to!==''))
			{
				$fileName .= $model->period_since.'_'.$model->period_to;
			}
			elseif($model->issue_date!=='')
			{
				$fileName .= $model->issue_date;
			}
			else
			{
				$fileName .= date('Y-m-d');
			}
			$fileName .= '.pdf';
			
			if($file_src !== null) $model->file_src = $fileName;
			
			if($model->save())
			{
				if($file_src !== null)
				{
					$file_src->saveAs($path.$fileName);
				}
				
				$this->redirect(array('invoicesData/index','iid'=>$model->id));
				//$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'objects'=>$objects,
			'suppliers'=>$suppliers,
			'tariffs'=>$tariffs,
			'statuses'=>$statuses,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		if($model->status != 1)
		{
			$object = Objects::model()->findByPk($model->object_id);
			$params = array('unit_id'=>$object->unit_id);
			
			if(Yii::app()->user->checkAccess('manageOwnData', $params))
			{
			
				$objects = $this->getObjects();
				$suppliers = $this->getSuppliers();
				$tariffs = $this->getTariffs();
				$statuses = $this->getStatuses();
			
				// Uncomment the following line if AJAX validation is needed
				$this->performAjaxValidation($model);
		
				if(isset($_POST['Invoices']))
				{
					$model->attributes=$_POST['Invoices'];
					$file_src=CUploadedFile::getInstance($model, 'file_src');
					
					$path = Yii::app()->basePath.'/../invs/'.Yii::app()->user->getState('unit_id').'/'.$model->object_id.'/';
					if(!is_dir($path))
					{
						mkdir($path, 0755, true);
					}
					
					$fileName = $model->supplier_id.'_'.$model->tariff_id.'_'.time().'_';
					
					if(($model->period_since!=='') && ($model->period_to!==''))
					{
						$fileName .= $model->period_since.'_'.$model->period_to;
					}
					elseif($model->issue_date!=='')
					{
						$fileName .= $model->issue_date;
					}
					else
					{
						$fileName .= date('Y-m-d');
					}
					$fileName .= '.pdf';
					
					if($file_src !== null) $model->file_src = $fileName;
					
					$model->status = 0; //set status "new"
					
					if($model->save())
					{
						if(is_object($file_src))
						{
							$file_src->saveAs($path.$fileName);
						}
						
						$this->redirect(array('invoicesData/index','iid'=>$model->id));
						//$this->redirect(array('view','id'=>$model->id));
					}
				}
	
				$this->render('update',array(
					'model'=>$model,
					'objects'=>$objects,
					'suppliers'=>$suppliers,
					'tariffs'=>$tariffs,
					'statuses'=>$statuses,
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
	public function actionDelete($id)
	{
		$model = $this->loadModel($id);
		if($model->status != 1)
		{
			$object = Objects::model()->findByPk($model->object_id);
			$params = array('unit_id'=>$object->unit_id);
		
			if(Yii::app()->user->checkAccess('manageOwnData', $params))
			{
				$model->delete();
	
				// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
				if(!isset($_GET['ajax']))
					$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
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
	public function actionIndex()
	{
		//$statuses = $this->getStatuses();
		//$data = Yii::app()->db->createCommand('select i.id, o.name as object, s.name as supplier, i.period_since, i.period_to, i.issue_date, i.status from invoices i join suppliers s on i.supplier_id = s.id join objects o on i.object_id = o.id where i.object_id in (select o.id from objects o where o.unit_id = '.Yii::app()->user->getState('unit_id').') order by i.period_since asc, i.status asc')->queryAll();
		//$dataProvider = new CArrayDataProvider($data);

		//$this->render('index',array(
			//'dataProvider'=>$dataProvider,
			//'statuses'=>$statuses,
		//));
		
		$model = new Invoices('searchByObject');
		$model->unsetAttributes();
		
		if(isset($_GET['Invoices']))
			$model->attributes = $_GET['Invoices'];

		$objects = array();
		$obj = $this->getObjects();
		foreach($obj as $id => $val)
			$objects[] = $id;
		$model->objects_search = $objects;
			
		$this->render('index', array(
			'model'=>$model,
		));
	}

	public function actionAdminIndex()
	{
		$model=new Invoices('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Invoices']))
			$model->attributes=$_GET['Invoices'];

		$this->render('admin/index', array(
			'model'=>$model,
		));
	}
	
	public function actionAdminView($id)
	{
		$model=$this->loadModel($id);
		$objects = $this->getAllObjects();
		$suppliers = $this->getSuppliers();
		$tariffs = $this->getTariffs();
		$statuses = $this->getStatuses();
		$unit = Objects::model()->findByPk($model->object_id);
		
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Invoices']))
		{
			$model->attributes=$_POST['Invoices'];
			if($model->save())
				$this->redirect(array('adminIndex'));
		}
		
		$this->render('admin/view',array(
			'model'=>$model,
			'objects'=>$objects,
			'suppliers'=>$suppliers,
			'tariffs'=>$tariffs,
			'statuses'=>$statuses,
			'unit'=>$unit,
		));
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Invoices('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Invoices']))
			$model->attributes=$_GET['Invoices'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionDynamicTariffs()
	{
		$data=Tariffs::model()->findAll('supplier_id=:supplier_id', array(':supplier_id'=>$_POST['supplier_id']));
		$data=CHtml::listData($data,'id','name');

		foreach ($data as $value=>$name)
		{
			echo CHtml::tag('option',array('value'=>$value),CHtml::encode($name),true);
		}
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Invoices::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='invoices-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	protected function getObjects()
	{
		$objects = array();
		$objectsModel = Units::model()->findByPk(Yii::app()->user->getState('unit_id'))->objects;
		foreach($objectsModel as $o)
			$objects[$o->id] = $o->name;
		return $objects;
	}
	
	protected function getAllObjects()
	{
		$objects = array();
		$objectsModel = Objects::model()->findAll();
		foreach($objectsModel as $o)
			$objects[$o->id] = $o->name;
		return $objects;
	}
	
	protected function getSuppliers()
	{
		$suppliers = array();
		$suppliersModel = Suppliers::model()->findAll();
		foreach($suppliersModel as $s)
			$suppliers[$s->id] = $s->name;
		return $suppliers;
	}
	
	protected function getTariffs()
	{
		$tariffs = array();
		$tariffsModel = Tariffs::model()->findAll();
		foreach($tariffsModel as $t)
			$tariffs[$t->id] = $t->name;
		return $tariffs;
	}
	
	protected function getStatuses()
	{
		$statuses = array(0 => 'nowa', 1 => 'zatwierdzona', 2 => 'odrzucona');
		return $statuses;
	}
}
