<?php
/* @var $this CountersController */
/* @var $model Counters */

$this->breadcrumbs=array(
	'Counters'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'LICZNIKI'),
	array('label'=>'Wyświetl liczniki', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz licznik', 'icon'=>'pencil', 'active'=>true, 'url'=>array('create')),
);
?>

<legend>Utwórz licznik</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'collectionPoints'=>$collectionPoints, 'mediums'=>$mediums)); ?>