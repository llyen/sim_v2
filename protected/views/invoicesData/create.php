<?php
/* @var $this InvoicesDataController */
/* @var $model InvoicesData */

$this->breadcrumbs=array(
	'Invoices Datas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InvoicesData', 'url'=>array('index')),
	array('label'=>'Manage InvoicesData', 'url'=>array('admin')),
);
?>

<h1>Create InvoicesData</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>