<?php
/* @var $this MediumsController */
/* @var $model Mediums */

$this->breadcrumbs=array(
	'Mediums'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mediums', 'url'=>array('index')),
	array('label'=>'Manage Mediums', 'url'=>array('admin')),
);
?>

<h1>Create Mediums</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>