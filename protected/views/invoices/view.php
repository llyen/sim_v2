<?php
/* @var $this InvoicesController */
/* @var $model Invoices */

$this->breadcrumbs=array(
	'Invoices'=>array('index'),
	$model->id,
);

$this->menu=array(
        array('label'=>'FAKTURY'),
	array('label'=>'Wyświetl faktury', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz fakturę', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Szczegóły</legend>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'tariff.name', 'label'=>'Taryfa'),
		array('name'=>'object.name', 'label'=>'Obiekt'),
		array('name'=>'supplier.name', 'label'=>'Dostawca'),
		'period_since',
		'period_to',
		'issue_date',
		'create_date',
		'create_user',
		'update_date',
		'update_user',
	),
)); ?>
