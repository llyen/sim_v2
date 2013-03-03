<?php

class CollectionPointsController extends Controller
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new CollectionPoints;
		$objects = $this->getObjects();
		
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['CollectionPoints']))
		{
			$model->attributes=$_POST['CollectionPoints'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
			'objects'=>$objects,
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
		$objects = $this->getObjects();
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['CollectionPoints']))
		{
			$model->attributes=$_POST['CollectionPoints'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
			'objects'=>$objects,
		));
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
		$data = Yii::app()->db->createCommand('select cp.id, cp.symbol, o.name as object, cp.multiplicand, cp.create_date, cp.create_user, cp.update_date, cp.update_user from collection_points cp join objects o on cp.object_id=o.id where cp.object_id in (select o.id from objects o where o.unit_id ='.Yii::app()->user->getState('unit_id').')')->queryAll();
		$dataProvider = new CArrayDataProvider($data);
		/*$dataProvider = new CActiveDataProvider('CollectionPoints', array(
					'criteria' => array(
						//'with' => 'object',
						'condition' => 'object_id=:object_id',
						'params' => array(':object_id'=>Objects::model()->find('unit_id=:unit_id', array(':unit_id'=>(int) Yii::app()->user->getState('unit_id')))->id), // WYSZUKIWANIE WSZYSTKICH PUNKTÓW !!!!!?
					),
				));*/
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionAdminIndex()
	{
		$data = Yii::app()->db->createCommand('select cp.id, cp.symbol, o.name as object, cp.multiplicand, cp.create_date, cp.create_user, cp.update_date, cp.update_user from collection_points cp join objects o on cp.object_id=o.id order by object asc, cp.create_date asc')->queryAll();
		$dataProvider = new CArrayDataProvider($data);
		$this->render('admin/index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionAdminView($id)
	{
		$this->render('admin/view',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new CollectionPoints('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['CollectionPoints']))
			$model->attributes=$_GET['CollectionPoints'];

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
		$model=CollectionPoints::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='collection-points-form')
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
}
