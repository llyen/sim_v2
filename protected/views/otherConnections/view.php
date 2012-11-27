<?php
/* @var $this OtherConnectionsController */
/* @var $model OtherConnections */

$this->breadcrumbs=array(
	'Other Connections'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OtherConnections', 'url'=>array('index')),
	array('label'=>'Create OtherConnections', 'url'=>array('create')),
	array('label'=>'Update OtherConnections', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OtherConnections', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OtherConnections', 'url'=>array('admin')),
);
?>

<h1>View OtherConnections #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'medium_id',
		'unit',
		'use',
	),
)); ?>
