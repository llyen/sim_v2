<?php
/* @var $this CountersController */
/* @var $model Counters */

$this->breadcrumbs=array(
	'Counters'=>array('index'),
	$model->id,
);

$this->menu=array(
        array('label'=>'LICZNIKI'),
	array('label'=>'Wyświetl liczniki', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz licznik', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Podgląd: <?php echo $model->symbol; ?></legend>

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
