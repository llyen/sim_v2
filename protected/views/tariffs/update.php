<?php
/* @var $this TariffsController */
/* @var $model Tariffs */

$this->breadcrumbs=array(
	'Tariffs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tariffs', 'url'=>array('index')),
	array('label'=>'Create Tariffs', 'url'=>array('create')),
	array('label'=>'View Tariffs', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tariffs', 'url'=>array('admin')),
);
?>

<h1>Update Tariffs <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>