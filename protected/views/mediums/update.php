<?php
/* @var $this MediumsController */
/* @var $model Mediums */

$this->breadcrumbs=array(
	'Mediums'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mediums', 'url'=>array('index')),
	array('label'=>'Create Mediums', 'url'=>array('create')),
	array('label'=>'View Mediums', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Mediums', 'url'=>array('admin')),
);
?>

<h1>Update Mediums <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>