<?php
/* @var $this CountersReadingsController */
/* @var $model CountersReadings */

$this->pageTitle=Yii::app()->name . ' :: Szczegóły odczytu licznika';

$this->breadcrumbs=array(
	'Counters Readings'=>array('index'),
	$model->id,
);

$this->menu=array(
        array('label'=>'ODCZYTY LICZNIKA'),
	array('label'=>'Powrót', 'icon'=>'chevron-left', 'url'=>array('/counters/adminIndex')),
	array('label'=>'Wyświetl odczyty', 'icon'=>'book', 'url'=>array("countersReadings/adminIndex/$cid")),
);
?>

<legend>Szczegóły</legend>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'counter.symbol', 'label'=>'Symbol licznika'),
		'reading_date',
		'counter_state',
		'use',
		'counter_state_second',
		'use_second',
		'create_date',
		'create_user',
		'update_date',
		'update_user',
	),
)); ?>
