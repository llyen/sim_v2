<?php
/* @var $this TariffsTypesController */
/* @var $model TariffsTypes */

$this->pageTitle=Yii::app()->name . ' :: Szczegóły typu';

$this->breadcrumbs=array(
	'Tariffs Types'=>array('index'),
	$model->id,
);

$this->menu=array(
        array('label'=>'TYPY TARYF'),
	array('label'=>'Wyświetl listę typów', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz typ taryfy', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Szczegóły</legend>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'type',
	),
)); ?>
