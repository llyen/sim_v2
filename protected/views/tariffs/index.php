<?php
/* @var $this TariffsController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Taryfy';

$this->breadcrumbs=array(
	'Tariffs',
);

$this->menu=array(
        array('label'=>'TARYFY'),
	array('label'=>'Wyświetl listę', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz taryfę', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Taryfy</legend>
	<?php $this->renderPartial('_grid', array('model'=>$model,'suppliers'=>$suppliers)); ?>
</div>
