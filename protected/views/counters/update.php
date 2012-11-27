<?php
/* @var $this CountersController */
/* @var $model Counters */

$this->breadcrumbs=array(
	'Counters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Counters', 'url'=>array('index')),
	array('label'=>'Create Counters', 'url'=>array('create')),
	array('label'=>'View Counters', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Counters', 'url'=>array('admin')),
);
?>

<h1>Update Counters <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>