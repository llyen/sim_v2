<?php

class CountersReadingsController extends Controller
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
	public function actionView($id, $cid)
	{
		$object = Counters::model()->findByPk($cid)->collectionPoint->object;
		$params = array('unit_id'=>$object->unit_id);
		
		if(Yii::app()->user->checkAccess('manageOwnData', $params))
		{
			$type = Counters::model()->findByPk($cid)->type;
			$this->render('view',array(
				'model'=>$this->loadModel($id),
				'cid'=>$cid,
				'type'=>$type,
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
		$object = Counters::model()->findByPk($id)->collectionPoint->object;
		$params = array('unit_id'=>$object->unit_id);
		
		if(Yii::app()->user->checkAccess('manageOwnData', $params))
		{
			$type = Counters::model()->findByPk($id)->type;
			$model=new CountersReadings;

			// Uncomment the following line if AJAX validation is needed
			$this->performAjaxValidation($model);

			if(isset($_POST['CountersReadings']))
			{
				$model->attributes=$_POST['CountersReadings'];
				if($model->save())
					$this->redirect(array('view', 'id'=>$model->id, 'cid'=>$id, 'type'=>$type));
			}

			$this->render('create',array(
				'model'=>$model,
				'cid'=>$id,
				'type'=>$type,
			));
		}
		else
		{
			throw new CHttpException(403,'Brak uprawnień do wykonania operacji.');
		}
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id, $cid)
	{
		$object = Counters::model()->findByPk($cid)->collectionPoint->object;
		$params = array('unit_id'=>$object->unit_id);
		
		if(Yii::app()->user->checkAccess('manageOwnData', $params))
		{
			$type = Counters::model()->findByPk($cid)->type;
			$model=$this->loadModel($id);

			// Uncomment the following line if AJAX validation is needed
			$this->performAjaxValidation($model);

			if(isset($_POST['CountersReadings']))
			{
				$model->attributes=$_POST['CountersReadings'];
				if($model->save())
					$this->redirect(array('view', 'id'=>$model->id, 'cid'=>$cid, 'type'=>$type));
			}

			$this->render('update',array(
				'model'=>$model,
				'cid'=>$cid,
				'type'=>$type,
			));
		}
		else
		{
			throw new CHttpException(403,'Brak uprawnień do wykonania operacji.');
		}
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id, $cid)
	{
		$object = Counters::model()->findByPk($cid)->collectionPoint->object;
		$params = array('unit_id'=>$object->unit_id);
		
		if(Yii::app()->user->checkAccess('manageOwnData', $params))
		{
			
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index', 'cid'=>$cid));
		}
		else
		{
			throw new CHttpException(403,'Brak uprawnień do wykonania operacji.');
		}
	}

	/**
	 * Lists all models.
	 * @param integer $cid the ID of the Counter
	 */
	public function actionIndex($cid)
	{
		$object = Counters::model()->findByPk($cid)->collectionPoint->object;
		$params = array('unit_id'=>$object->unit_id);
		
		if(Yii::app()->user->checkAccess('manageOwnData', $params))
		{
			$type = Counters::model()->findByPk($cid)->type;
			//$dataProvider=new CActiveDataProvider('CountersReadings');
			$countersReadings=Counters::model()->findByPk($cid)->countersReadings;
			$dataProvider=new CArrayDataProvider($countersReadings);
			$this->render('index',array(
				'cid'=>$cid,
				'dataProvider'=>$dataProvider,
				'type'=>$type,
			));
		}
		else
		{
			throw new CHttpException(403,'Brak uprawnień do wykonania operacji.');
		}
	}

	public function actionAdminIndex($id)
	{
		$type = Counters::model()->findByPk($id)->type;
		$countersReadings=Counters::model()->findByPk($id)->countersReadings;
		$dataProvider=new CArrayDataProvider($countersReadings);
		$this->render('admin/index',array(
			'id'=>$id,
			'dataProvider'=>$dataProvider,
			'type'=>$type,
		));
	}
	
	public function actionAdminView($id, $cid)
	{
		$this->render('admin/view',array(
			'model'=>$this->loadModel($id),
			'cid'=>$cid,
		));
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new CountersReadings('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['CountersReadings']))
			$model->attributes=$_GET['CountersReadings'];

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
		$model=CountersReadings::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='counters-readings-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
