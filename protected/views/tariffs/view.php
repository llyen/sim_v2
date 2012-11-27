<?php
/* @var $this TariffsController */
/* @var $model Tariffs */

$this->breadcrumbs=array(
	'Tariffs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Tariffs', 'url'=>array('index')),
	array('label'=>'Create Tariffs', 'url'=>array('create')),
	array('label'=>'Update Tariffs', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tariffs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tariffs', 'url'=>array('admin')),
);
?>

<h1>View Tariffs #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type_id',
		'supplier_id',
		'name',
		'mandatory_date',
	),
)); ?>
