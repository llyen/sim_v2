<?php
/* @var $this InvoicesController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Zestawienie faktur';

$this->breadcrumbs=array(
	'Invoices',
);

$this->menu=array(
        array('label'=>'FAKTURY'),
	array('label'=>'Wyświetl faktury', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz fakturę', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Zestawienie faktur</legend>
	<?php $this->renderPartial('_grid', array('model'=>$model)); ?>
</div>


