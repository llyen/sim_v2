<?php
/* @var $this InvoicesController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Faktury';

$this->breadcrumbs=array(
	'Invoices',
);

$this->menu=array(
        array('label'=>'FAKTURY'),
	array('label'=>'Wyświetl faktury', 'icon'=>'book', 'active'=>true, 'url'=>array('adminIndex')),
);
?>

<div class="window">
	<legend>Zestawienie faktur</legend>
	<?php $this->renderPartial('admin/_grid', array('model'=>$model)); ?>
</div>


