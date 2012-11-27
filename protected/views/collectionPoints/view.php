<?php
/* @var $this CollectionPointsController */
/* @var $model CollectionPoints */

$this->breadcrumbs=array(
	'Collection Points'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CollectionPoints', 'url'=>array('index')),
	array('label'=>'Create CollectionPoints', 'url'=>array('create')),
	array('label'=>'Update CollectionPoints', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CollectionPoints', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CollectionPoints', 'url'=>array('admin')),
);
?>

<h1>View CollectionPoints #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'object_id',
		'symbol',
		'multiplicand',
		'create_date',
		'create_user',
		'update_date',
		'update_user',
	),
)); ?>
