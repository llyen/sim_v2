<?php
/* @var $this MediumsController */
/* @var $model Mediums */

$this->breadcrumbs=array(
	'Mediums'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Mediums', 'url'=>array('index')),
	array('label'=>'Create Mediums', 'url'=>array('create')),
	array('label'=>'Update Mediums', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Mediums', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mediums', 'url'=>array('admin')),
);
?>

<h1>View Mediums #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
