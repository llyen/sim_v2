<?php
/* @var $this ObjectsController */
/* @var $model Objects */

$this->pageTitle=Yii::app()->name . ' :: Utwórz obiekt';

$this->breadcrumbs=array(
	'Objects'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'OBIEKTY'),
	array('label'=>'Wyświetl obiekty', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz obiekt', 'icon'=>'pencil', 'active'=>true, 'url'=>array('create')),
);
?>

<legend>Utwórz obiekt</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'units'=>$units)); ?>