<?php
/* @var $this UnitsController */
/* @var $model Units */

$this->pageTitle=Yii::app()->name . ' :: Utwórz jednostkę';

$this->breadcrumbs=array(
	'Units'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'JEDNOSTKI'),
	array('label'=>'Wyświetl jednostki', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz jednostkę', 'icon'=>'pencil', 'active'=>true, 'url'=>array('create')),
);
?>

<legend>Utwórz jednostkę</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>