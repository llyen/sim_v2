<?php
/* @var $this SuppliersController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Dostawcy';

$this->breadcrumbs=array(
	'Suppliers',
);

$this->menu=array(
        array('label'=>'DOSTAWCY'),
	array('label'=>'Wyświetl listę dostawców', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz dostawcę', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Dostawcy</legend>
	<?php $this->renderPartial('_grid', array('model'=>$model,'mediums'=>$mediums)); ?>
</div>
