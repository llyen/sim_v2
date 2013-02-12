<?php
/* @var $this MediumsController */
/* @var $model Mediums */

$this->breadcrumbs=array(
	'Mediums'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'MEDIUM'),
	array('label'=>'Wyświetl listę', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz medium', 'icon'=>'pencil', 'active'=>true, 'url'=>array('create')),
);
?>

<legend>Utwórz medium</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>