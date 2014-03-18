<?php
/* @var $this CollectionPointsController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Zestawienie punktów poboru';

$this->breadcrumbs=array(
	'Collection Points',
);

$this->menu=array(
        array('label'=>'PUNKTY POBORU'),
	array('label'=>'Wyświetl punkty poboru', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz punkt poboru', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Zestawienie punktów poboru dla jednostki</legend>
	<?php $this->renderPartial('_grid', array('model'=>$model)); ?>
</div>

