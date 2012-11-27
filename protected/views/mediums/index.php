<?php
/* @var $this MediumsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mediums',
);

$this->menu=array(
	array('label'=>'Create Mediums', 'url'=>array('create')),
	array('label'=>'Manage Mediums', 'url'=>array('admin')),
);
?>

<h1>Mediums</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
