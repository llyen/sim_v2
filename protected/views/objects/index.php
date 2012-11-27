<?php
/* @var $this ObjectsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Objects',
);

$this->menu=array(
	array('label'=>'Create Objects', 'url'=>array('create')),
	array('label'=>'Manage Objects', 'url'=>array('admin')),
);
?>

<h1>Objects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
