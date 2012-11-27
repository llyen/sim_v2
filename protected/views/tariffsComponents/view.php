<?php
/* @var $this TariffsComponentsController */
/* @var $model TariffsComponents */

$this->breadcrumbs=array(
	'Tariffs Components'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TariffsComponents', 'url'=>array('index')),
	array('label'=>'Create TariffsComponents', 'url'=>array('create')),
	array('label'=>'Update TariffsComponents', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TariffsComponents', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TariffsComponents', 'url'=>array('admin')),
);
?>

<h1>View TariffsComponents #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tariff_id',
		'type_id',
		'medium_id',
		'name',
		'unit',
		'mandatory_date',
		'price_per_unit',
		'vat',
		'multiplier',
		'archival',
	),
)); ?>
