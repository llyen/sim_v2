<?php
/* @var $this TariffsController */
/* @var $model Tariffs */

$this->breadcrumbs=array(
	'Tariffs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tariffs', 'url'=>array('index')),
	array('label'=>'Manage Tariffs', 'url'=>array('admin')),
);
?>

<h1>Create Tariffs</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>