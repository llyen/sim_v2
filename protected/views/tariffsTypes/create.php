<?php
/* @var $this TariffsTypesController */
/* @var $model TariffsTypes */

$this->breadcrumbs=array(
	'Tariffs Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TariffsTypes', 'url'=>array('index')),
	array('label'=>'Manage TariffsTypes', 'url'=>array('admin')),
);
?>

<h1>Create TariffsTypes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>