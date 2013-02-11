<?php
/* @var $this UnitsController */
/* @var $model Units */

$this->breadcrumbs=array(
	'Units'=>array('index'),
	$model->name,
);

$this->menu=array(
        array('label'=>'JEDNOSTKI'),
	array('label'=>'Wyświetl jednostki', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz jednostkę', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Szczegóły</legend>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'address',
	),
)); ?>
