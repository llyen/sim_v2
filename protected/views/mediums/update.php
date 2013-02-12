<?php
/* @var $this MediumsController */
/* @var $model Mediums */

$this->breadcrumbs=array(
	'Mediums'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
        array('label'=>'MEDIUM'),
	array('label'=>'Wyświetl listę', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz medium', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Edytuj medium</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>