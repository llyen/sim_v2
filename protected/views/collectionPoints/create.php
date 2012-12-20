<?php
/* @var $this CollectionPointsController */
/* @var $model CollectionPoints */

$this->breadcrumbs=array(
	'Collection Points'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'PUNKTY POBORU'),
	array('label'=>'Wyświetl punkty poboru', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz punkt poboru', 'icon'=>'pencil', 'active'=>true, 'url'=>array('create')),
);
?>
<legend>Utwórz punkt poboru</legend>
<?php echo $this->renderPartial('_form', array('model'=>$model, 'objects'=>$objects)); ?>