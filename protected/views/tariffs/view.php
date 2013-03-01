<?php
/* @var $this TariffsController */
/* @var $model Tariffs */

$this->pageTitle=Yii::app()->name . ' :: Szczegóły taryfy';

$this->breadcrumbs=array(
	'Tariffs'=>array('index'),
	$model->name,
);

$this->menu=array(
        array('label'=>'TARYFY'),
	array('label'=>'Wyświetl listę', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz taryfę', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Szczegóły</legend>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'type.type', 'label'=>'Typ'),
		array('name'=>'supplier.name', 'label'=>'Dostawca'),
		'name',
		'mandatory_date',
	),
)); ?>
