<?php
/* @var $this InvoicesDataController */
/* @var $model InvoicesData */

$this->breadcrumbs=array(
	'Invoices Datas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InvoicesData', 'url'=>array('index')),
	array('label'=>'Create InvoicesData', 'url'=>array('create')),
	array('label'=>'Update InvoicesData', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InvoicesData', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InvoicesData', 'url'=>array('admin')),
);
?>

<h1>View InvoicesData #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'invoice_id',
		'component_id',
		'value',
		'create_date',
		'create_user',
		'update_date',
		'update_user',
	),
)); ?>
