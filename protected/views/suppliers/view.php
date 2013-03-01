<?php
/* @var $this SuppliersController */
/* @var $model Suppliers */

$this->pageTitle=Yii::app()->name . ' :: Szczegóły dostawcy';

$this->breadcrumbs=array(
	'Suppliers'=>array('index'),
	$model->name,
);

$this->menu=array(
        array('label'=>'DOSTAWCY'),
	array('label'=>'Wyświetl listę dostawców', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz dostawcę', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Szczegóły</legend>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'medium_id', 'label'=>'Medium'),
		'name',
		'address',
	),
)); ?>
