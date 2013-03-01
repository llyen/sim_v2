<?php
/* @var $this CollectionPointsController */
/* @var $model CollectionPoints */

$this->pageTitle=Yii::app()->name . ' :: Edytuj punkt poboru';

$this->breadcrumbs=array(
	'Collection Points'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
        array('label'=>'PUNKTY POBORU'),
	array('label'=>'Wyświetl punkty poboru', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz punkt poboru', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Edytuj punkt poboru <?php echo $model->symbol; ?></legend>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'objects'=>$objects)); ?>