<?php
/* @var $this TariffsComponentsController */
/* @var $model TariffsComponents */

$this->breadcrumbs=array(
	'Tariffs Components'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TariffsComponents', 'url'=>array('index')),
	array('label'=>'Manage TariffsComponents', 'url'=>array('admin')),
);
?>

<h1>Create TariffsComponents</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>