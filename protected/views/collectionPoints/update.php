<?php
/* @var $this CollectionPointsController */
/* @var $model CollectionPoints */

$this->breadcrumbs=array(
	'Collection Points'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CollectionPoints', 'url'=>array('index')),
	array('label'=>'Create CollectionPoints', 'url'=>array('create')),
	array('label'=>'View CollectionPoints', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CollectionPoints', 'url'=>array('admin')),
);
?>

<h1>Update CollectionPoints <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>