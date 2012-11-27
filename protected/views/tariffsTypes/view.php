<?php
/* @var $this TariffsTypesController */
/* @var $model TariffsTypes */

$this->breadcrumbs=array(
	'Tariffs Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TariffsTypes', 'url'=>array('index')),
	array('label'=>'Create TariffsTypes', 'url'=>array('create')),
	array('label'=>'Update TariffsTypes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TariffsTypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TariffsTypes', 'url'=>array('admin')),
);
?>

<h1>View TariffsTypes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
	),
)); ?>
