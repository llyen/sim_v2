<?php
/* @var $this TariffsTypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tariffs Types',
);

$this->menu=array(
	array('label'=>'Create TariffsTypes', 'url'=>array('create')),
	array('label'=>'Manage TariffsTypes', 'url'=>array('admin')),
);
?>

<h1>Tariffs Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
