<?php
/* @var $this TariffsComponentsController */
/* @var $model TariffsComponents */

$this->breadcrumbs=array(
	'Tariffs Components'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TariffsComponents', 'url'=>array('index')),
	array('label'=>'Create TariffsComponents', 'url'=>array('create')),
	array('label'=>'View TariffsComponents', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TariffsComponents', 'url'=>array('admin')),
);
?>

<h1>Update TariffsComponents <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>