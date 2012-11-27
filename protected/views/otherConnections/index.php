<?php
/* @var $this OtherConnectionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Other Connections',
);

$this->menu=array(
	array('label'=>'Create OtherConnections', 'url'=>array('create')),
	array('label'=>'Manage OtherConnections', 'url'=>array('admin')),
);
?>

<h1>Other Connections</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
