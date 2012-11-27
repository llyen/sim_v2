<?php
/* @var $this InvoicesDataController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Invoices Datas',
);

$this->menu=array(
	array('label'=>'Create InvoicesData', 'url'=>array('create')),
	array('label'=>'Manage InvoicesData', 'url'=>array('admin')),
);
?>

<h1>Invoices Datas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
