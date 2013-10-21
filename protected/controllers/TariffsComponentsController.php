<?php

class TariffsComponentsController extends Controller
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
				'actions'=>array('index','view','create','update','delete'),
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
		$model = $this->loadModel($id);
		$model->archival = ($model->archival) ? 'TAK' : 'NIE';
		$this->render('view',array(
			'model'=>$model,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new TariffsComponents;
		$tariffs=$this->getTariffs();
		$types=$this->getTypes();
		$mediums=$this->getMediums();
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['TariffsComponents']))
		{
			$model->attributes=$_POST['TariffsComponents'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
			'tariffs'=>$tariffs,
			'types'=>$types,
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
		$tariffs=$this->getTariffs();
		$types=$this->getTypes();
		$mediums=$this->getMediums();
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['TariffsComponents']))
		{
			$model->attributes=$_POST['TariffsComponents'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
			'tariffs'=>$tariffs,
			'types'=>$types,
			'mediums'=>$mediums,
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
		//$tariffsComponents=Yii::app()->db->createCommand('select tc.id, t.name as tariff, s.name as supplier, tc.name, m.name as medium, tc.mandatory_date from tariffs_components tc join tariffs t on tc.tariff_id=t.id join mediums m on tc.medium_id=m.id join suppliers s on t.supplier_id=s.id order by tariff asc, tc.name asc')->queryAll();
		$model=new TariffsComponents('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TariffsComponents']))
			$model->attributes=$_GET['TariffsComponents'];
		$this->render('index',array(
			'model'=>$model,
			'suppliers'=>$this->getSuppliers(),
			'tariffs'=>$this->getTariffs(),
			'mediums'=>$this->getMediums(),
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TariffsComponents('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TariffsComponents']))
			$model->attributes=$_GET['TariffsComponents'];

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
		$model=TariffsComponents::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='tariffs-components-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
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
			$tariffs[$t->id] = $t->name.' ('.$t->supplier->name.')';
		return $tariffs;
	}
	
	protected function getTypes()
	{
		$types = array();
		$typesModel = TariffsComponentsTypes::model()->findAll();
		foreach($typesModel as $t)
			$types[$t->id] = $t->type;
		return $types;
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
