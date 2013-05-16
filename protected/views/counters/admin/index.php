<?php
/* @var $this CountersController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Liczniki';

$this->breadcrumbs=array(
	'Counters',
);

$this->menu=array(
        array('label'=>'LICZNIKI'),
	array('label'=>'Wyświetl liczniki', 'icon'=>'book', 'active'=>true, 'url'=>array('adminIndex')),
);
?>

<div class="window">
	<legend>Zestawienie liczników</legend>
	<?php $this->renderPartial('admin/_grid', array('model'=>$model)); ?>
</div>

