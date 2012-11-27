<?php
/* @var $this CountersController */
/* @var $model Counters */

$this->breadcrumbs=array(
	'Counters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Counters', 'url'=>array('index')),
	array('label'=>'Create Counters', 'url'=>array('create')),
	array('label'=>'Update Counters', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Counters', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Counters', 'url'=>array('admin')),
);
?>

<h1>View Counters #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'collection_point_id',
		'medium_id',
		'symbol',
		'unit',
		'initial_state',
		'installation_date',
		'archival',
		'create_date',
		'create_user',
		'update_date',
		'update_user',
	),
)); ?>
