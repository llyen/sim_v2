<?php
/* @var $this CountersReadingsController */
/* @var $model CountersReadings */

$this->breadcrumbs=array(
	'Counters Readings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CountersReadings', 'url'=>array('index')),
	array('label'=>'Create CountersReadings', 'url'=>array('create')),
	array('label'=>'Update CountersReadings', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CountersReadings', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CountersReadings', 'url'=>array('admin')),
);
?>

<h1>View CountersReadings #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'counter_id',
		'reading_date',
		'counter_state',
		'use',
		'create_date',
		'create_user',
		'update_date',
		'update_user',
	),
)); ?>
