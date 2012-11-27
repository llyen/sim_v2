<?php
/* @var $this TariffsComponentsTypesController */
/* @var $model TariffsComponentsTypes */

$this->breadcrumbs=array(
	'Tariffs Components Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TariffsComponentsTypes', 'url'=>array('index')),
	array('label'=>'Manage TariffsComponentsTypes', 'url'=>array('admin')),
);
?>

<h1>Create TariffsComponentsTypes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>