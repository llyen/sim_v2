<?php
/* @var $this TariffsComponentsTypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tariffs Components Types',
);

$this->menu=array(
	array('label'=>'Create TariffsComponentsTypes', 'url'=>array('create')),
	array('label'=>'Manage TariffsComponentsTypes', 'url'=>array('admin')),
);
?>

<h1>Tariffs Components Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
