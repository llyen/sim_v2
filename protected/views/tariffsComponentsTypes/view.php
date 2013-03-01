<?php
/* @var $this TariffsComponentsTypesController */
/* @var $model TariffsComponentsTypes */

$this->pageTitle=Yii::app()->name . ' :: Szczegóły typu';

$this->breadcrumbs=array(
	'Tariffs Components Types'=>array('index'),
	$model->id,
);

$this->menu=array(
        array('label'=>'TYPY SKŁADNIKÓW TARYF'),
	array('label'=>'Wyświetl listę typów', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz typ składnika', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Szczegóły</legend>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'type',
	),
)); ?>
