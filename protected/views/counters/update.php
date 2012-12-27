<?php
/* @var $this CountersController */
/* @var $model Counters */

$this->breadcrumbs=array(
	'Counters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
        array('label'=>'LICZNIKI'),
	array('label'=>'Wyświetl liczniki', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz licznik', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Edytuj licznik <?php echo $model->symbol; ?></legend>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'collectionPoints'=>$collectionPoints, 'mediums'=>$mediums)); ?>