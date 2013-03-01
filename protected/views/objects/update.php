<?php
/* @var $this ObjectsController */
/* @var $model Objects */

$this->pageTitle=Yii::app()->name . ' :: Edytuj obiekt';

$this->breadcrumbs=array(
	'Objects'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
        array('label'=>'OBIEKTY'),
	array('label'=>'Wyświetl obiekty', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz obiekt', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Edytuj obiekt <?php echo $model->name; ?></legend>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'units'=>$units)); ?>