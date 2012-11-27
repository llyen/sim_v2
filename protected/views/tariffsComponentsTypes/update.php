<?php
/* @var $this TariffsComponentsTypesController */
/* @var $model TariffsComponentsTypes */

$this->breadcrumbs=array(
	'Tariffs Components Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TariffsComponentsTypes', 'url'=>array('index')),
	array('label'=>'Create TariffsComponentsTypes', 'url'=>array('create')),
	array('label'=>'View TariffsComponentsTypes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TariffsComponentsTypes', 'url'=>array('admin')),
);
?>

<h1>Update TariffsComponentsTypes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>