<?php
/* @var $this ObjectsController */
/* @var $model Objects */

$this->breadcrumbs=array(
	'Objects'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Objects', 'url'=>array('index')),
	array('label'=>'Create Objects', 'url'=>array('create')),
	array('label'=>'Update Objects', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Objects', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Objects', 'url'=>array('admin')),
);
?>

<h1>View Objects #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'unit_id',
		'name',
		'address',
	),
)); ?>
