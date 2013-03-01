<?php
/* @var $this TariffsComponentsController */
/* @var $model TariffsComponents */

$this->pageTitle=Yii::app()->name . ' :: Szczegóły składnika';

$this->breadcrumbs=array(
	'Tariffs Components'=>array('index'),
	$model->name,
);

$this->menu=array(
        array('label'=>'SKŁADNIKI TARYF'),
	array('label'=>'Wyświetl listę', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz składnik', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Szczegóły</legend>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'tariff.name', 'label'=>'Taryfa'),
		array('name'=>'type.type', 'label'=>'Typ składnika'),
		array('name'=>'medium.name', 'label'=>'Medium'),
		'name',
		'unit',
		'mandatory_date',
		'price_per_unit',
		'vat',
		'multiplier',
		'archival',
	),
)); ?>
