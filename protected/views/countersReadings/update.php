<?php
/* @var $this CountersReadingsController */
/* @var $model CountersReadings */

$this->breadcrumbs=array(
	'Counters Readings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CountersReadings', 'url'=>array('index')),
	array('label'=>'Create CountersReadings', 'url'=>array('create')),
	array('label'=>'View CountersReadings', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CountersReadings', 'url'=>array('admin')),
);
?>

<h1>Update CountersReadings <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>