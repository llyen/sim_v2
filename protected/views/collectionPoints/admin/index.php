<?php
/* @var $this CollectionPointsController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Punkty poboru';

$this->breadcrumbs=array(
	'Collection Points',
);

$this->menu=array(
        array('label'=>'PUNKTY POBORU'),
	array('label'=>'Wyświetl punkty poboru', 'icon'=>'book', 'active'=>true, 'url'=>array('adminIndex')),
);
?>

<div class="window">
	<legend>Punkty poboru</legend>
	<?php $this->renderPartial('admin/_grid', array('model'=>$model)); ?>
</div>

