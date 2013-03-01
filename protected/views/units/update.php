<?php
/* @var $this UnitsController */
/* @var $model Units */

$this->pageTitle=Yii::app()->name . ' :: Edytuj jednostkę';

$this->breadcrumbs=array(
	'Units'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
        array('label'=>'JEDNOSTKI'),
	array('label'=>'Wyświetl jednostki', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz jednostkę', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Edytuj jednostkę <?php echo $model->name; ?></legend>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>