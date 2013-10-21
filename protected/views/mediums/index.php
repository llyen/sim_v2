<?php
/* @var $this MediumsController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Medium';

$this->breadcrumbs=array(
	'Mediums',
);

$this->menu=array(
        array('label'=>'MEDIUM'),
	array('label'=>'Wyświetl listę', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz medium', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Medium</legend>
	<?php $this->renderPartial('_grid', array('model'=>$model)); ?>
</div>
