<?php
/* @var $this UnitsController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Jednostki';

$this->breadcrumbs=array(
	'Units',
);

$this->menu=array(
        array('label'=>'JEDNOSTKI'),
	array('label'=>'Wyświetl jednostki', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz jednostkę', 'icon'=>'pencil', 'url'=>array('create')),
);
?>
<div class="window">
	<legend>Jednostki</legend>
	<?php $this->renderPartial('_grid', array('model'=>$model)); ?>
</div>