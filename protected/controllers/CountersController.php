<?php

class CountersController extends Controller
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
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('index', 'view', 'create', 'update'),
				'roles'=>array('unit_admin'),
			),
			array('allow',
				'actions'=>array('admin','delete','adminIndex','adminView'),
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
		$model = Counters::model()->with('collectionPoint', 'medium')->findByPk($id);
		$model->archival = ($model->archival) ? 'TAK' : 'NIE';
		$model->type = ($model->type) ? 'dwutaryfowy' : 'jednotaryfowy';
		
		$object = CollectionPoints::model()->findByPk($model->collection_point_id)->object;
		$params = array('unit_id'=>$object->unit_id);
		
		if(Yii::app()->user->checkAccess('manageOwnData', $params))
		{
			$this->render('view',array(
				'model'=>$model,//$this->loadModel($id),
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
		$model=new Counters;
		$collectionPoints=$this->getCollectionPoints();
		$mediums=$this->getMediums();
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Counters']))
		{
			$model->attributes=$_POST['Counters'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
			'collectionPoints'=>$collectionPoints,
			'mediums'=>$mediums,
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
		$collectionPoints=$this->getCollectionPoints();
		$mediums=$this->getMediums();
		
		$object = CollectionPoints::model()->findByPk($model->collection_point_id)->object;
		$params = array('unit_id'=>$object->unit_id);
		
		if(Yii::app()->user->checkAccess('manageOwnData', $params))
		{
			// Uncomment the following line if AJAX validation is needed
			$this->performAjaxValidation($model);

			if(isset($_POST['Counters']))
			{
				$model->attributes=$_POST['Counters'];
				if($model->save())
					$this->redirect(array('view','id'=>$model->id));
			}

			$this->render('update',array(
				'model'=>$model,
				'collectionPoints'=>$collectionPoints,
				'mediums'=>$mediums,
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
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{	
		$model = new Counters('searchByCollectionPoint');
		$model->unsetAttributes();
		if(isset($_GET['Counters']))
			$model->attributes=$_GET['Counters'];
		
		$collectionPoints = array();
		$cp = $this->getCollectionPoints();
		foreach($cp as $id => $val)
			$collectionPoints[] = $id;
		$model->collection_points_search = $collectionPoints;
		
		$this->render('index', array(
			'model'=>$model,
		));
	}

	public function actionAdminIndex()
	{
		$model=new Counters('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Counters']))
			$model->attributes=$_GET['Counters'];

		$this->render('admin/index', array(
			'model'=>$model,
		));
	}
	
	public function actionAdminView($id)
	{
		$model=$this->loadModel($id);
		$model->archival = ($model->archival) ? 'TAK' : 'NIE';
		$model->type = ($model->type) ? 'dwutaryfowy' : 'jednotaryfowy';
		$this->render('admin/view',array(
			'model'=>$model,
		));
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Counters('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Counters']))
			$model->attributes=$_GET['Counters'];

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
		$model=Counters::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='counters-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	protected function getCollectionPoints()
	{
		$collectionPoints = array();
		$collectionPointsModel = CollectionPoints::model()->findAllBySql('select cp.id, cp.symbol from collection_points cp where cp.object_id in (select o.id from objects o where o.unit_id='.Yii::app()->user->getState('unit_id').')');
		foreach($collectionPointsModel as $cp)
			$collectionPoints[$cp->id] = $cp->symbol;
		return $collectionPoints;
	}
	
	protected function getMediums()
	{
		$mediums = array();
		$mediumsModel = Mediums::model()->findAll();
		foreach($mediumsModel as $m)
			$mediums[$m->id] = $m->name;
		return $mediums;
	}
}
