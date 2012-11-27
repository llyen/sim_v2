<?php
/* @var $this CountersReadingsController */
/* @var $model CountersReadings */

$this->breadcrumbs=array(
	'Counters Readings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CountersReadings', 'url'=>array('index')),
	array('label'=>'Manage CountersReadings', 'url'=>array('admin')),
);
?>

<h1>Create CountersReadings</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>