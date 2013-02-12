<?php
/* @var $this TariffsComponentsController */
/* @var $model TariffsComponents */

$this->breadcrumbs=array(
	'Tariffs Components'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'SKŁADNIKI TARYF'),
	array('label'=>'Wyświetl listę', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz składnik', 'icon'=>'pencil', 'active'=>true, 'url'=>array('create')),
);
?>

<legend>Utwórz składnik</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model,'tariffs'=>$tariffs,'types'=>$types,'mediums'=>$mediums)); ?>