<?php
/* @var $this ObjectsController */
/* @var $model Objects */

$this->breadcrumbs=array(
	'Objects'=>array('index'),
	$model->name,
);

$this->menu=array(
        array('label'=>'OBIEKTY'),
	array('label'=>'Wyświetl obiekty', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz obiekt', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Szczegóły</legend>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'unit.name', 'label'=>'Jednostka'),
		'name',
		'address',
		'plot_number',
		array(
		      'name'=>'energy_certificate',
		      'type'=>'raw',
		      'value'=>(is_null($model->energy_certificate)) ? 'Brak powiązanego pliku.' : '<a href="'.Yii::app()->request->baseUrl.'/files/'.$model->energy_certificate.'" title="podgląd dokumentu"><img src="'.Yii::app()->request->baseUrl.'/images/pdf.png" alt="podgląd dokumentu" /></a>',
		),
		'area',
		'cubage',
		'additional_information',
	),
)); ?>