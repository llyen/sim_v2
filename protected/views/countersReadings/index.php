<?php
/* @var $this CountersReadingsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Counters Readings',
);

$this->menu=array(
	array('label'=>'Create CountersReadings', 'url'=>array('create')),
	array('label'=>'Manage CountersReadings', 'url'=>array('admin')),
);
?>

<h1>Counters Readings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
