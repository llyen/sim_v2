<?php
/* @var $this TariffsComponentsController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Składniki taryf';

$this->breadcrumbs=array(
	'Tariffs Components',
);

$this->menu=array(
        array('label'=>'SKŁADNIKI TARYF'),
	array('label'=>'Wyświetl listę', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz składnik', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Składniki taryf</legend>
	<?php $this->renderPartial('_grid', array('model'=>$model,'suppliers'=>$suppliers,'tariffs'=>$tariffs,'mediums'=>$mediums)); ?>
</div>