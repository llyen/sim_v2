<?php
/* @var $this InvoicesDataController */
/* @var $model InvoicesData */

$this->pageTitle=Yii::app()->name . ' :: Szczegóły pozycji na fakturze';

$this->breadcrumbs=array(
	'Invoices Datas'=>array('index'),
	$model->id,
);

$this->menu=array(
        array('label'=>'POZYCJE NA FAKTURZE'),
	array('label'=>'Powrót', 'icon'=>'chevron-left', 'url'=>array('/invoices')),
	array('label'=>'Wyświetl pozycje', 'icon'=>'book', 'url'=>array("invoicesData/$iid")),
        array('label'=>'Dodaj pozycję', 'icon'=>'pencil', 'url'=>array("invoicesData/create/$iid")),
);
?>

<legend>Szczegóły</legend>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'invoice.issue_date', 'label'=>'Faktura z dnia'),
		array('name'=>'component.name', 'label'=>'Składnik'),
		'value',
		'create_date',
		'create_user',
		'update_date',
		'update_user',
	),
)); ?>
