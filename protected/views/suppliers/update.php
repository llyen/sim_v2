<?php
/* @var $this SuppliersController */
/* @var $model Suppliers */

$this->pageTitle=Yii::app()->name . ' :: Edytuj dostawcę';

$this->breadcrumbs=array(
	'Suppliers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
        array('label'=>'DOSTAWCY'),
	array('label'=>'Wyświetl listę dostawców', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz dostawcę', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Edytuj dostawcę</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'mediums'=>$mediums)); ?>