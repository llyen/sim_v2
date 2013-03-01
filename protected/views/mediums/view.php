<?php
/* @var $this MediumsController */
/* @var $model Mediums */

$this->pageTitle=Yii::app()->name . ' :: Szczegóły medium';

$this->breadcrumbs=array(
	'Mediums'=>array('index'),
	$model->name,
);

$this->menu=array(
        array('label'=>'MEDIUM'),
	array('label'=>'Wyświetl listę', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz medium', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Szczegóły</legend>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
	),
)); ?>
