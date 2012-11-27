<?php
/* @var $this TariffsTypesController */
/* @var $model TariffsTypes */

$this->breadcrumbs=array(
	'Tariffs Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TariffsTypes', 'url'=>array('index')),
	array('label'=>'Create TariffsTypes', 'url'=>array('create')),
	array('label'=>'View TariffsTypes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TariffsTypes', 'url'=>array('admin')),
);
?>

<h1>Update TariffsTypes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>