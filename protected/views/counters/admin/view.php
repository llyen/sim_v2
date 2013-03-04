<?php
/* @var $this CountersController */
/* @var $model Counters */

$this->pageTitle=Yii::app()->name . ' :: Szczegóły licznika';

$this->breadcrumbs=array(
	'Counters'=>array('index'),
	$model->id,
);

$this->menu=array(
        array('label'=>'LICZNIKI'),
	array('label'=>'Wyświetl liczniki', 'icon'=>'book', 'url'=>array('adminIndex')),
);
?>

<legend>Podgląd: <?php echo $model->symbol; ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'collectionPoint.symbol', 'label'=>'Punkt poboru'),
		array('name'=>'medium.name', 'label'=>'Medium'),
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