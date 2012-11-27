<?php
/* @var $this CollectionPointsController */
/* @var $model CollectionPoints */

$this->breadcrumbs=array(
	'Collection Points'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CollectionPoints', 'url'=>array('index')),
	array('label'=>'Manage CollectionPoints', 'url'=>array('admin')),
);
?>

<h1>Create CollectionPoints</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>