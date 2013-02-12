<?php
/* @var $this TariffsComponentsController */
/* @var $model TariffsComponents */

$this->breadcrumbs=array(
	'Tariffs Components'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
        array('label'=>'SKŁADNIKI TARYF'),
	array('label'=>'Wyświetl listę', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz składnik', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Edytuj składnik</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model,'tariffs'=>$tariffs,'types'=>$types,'mediums'=>$mediums)); ?>