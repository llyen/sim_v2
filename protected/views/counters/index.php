<?php
/* @var $this CountersController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Zestawienie liczników';

$this->breadcrumbs=array(
	'Counters',
);

$this->menu=array(
        array('label'=>'LICZNIKI'),
	array('label'=>'Wyświetl liczniki', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz licznik', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Zestawienie liczników dla jednostki</legend>
	<?php $this->renderPartial('_grid', array('model'=>$model)); ?>
</div>

