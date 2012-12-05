<?php
/* @var $this CollectionPointsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Collection Points',
);

$this->menu=array(
	array('label'=>'Create CollectionPoints', 'url'=>array('create')),
	array('label'=>'Manage CollectionPoints', 'url'=>array('admin')),
);
?>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));
?>
