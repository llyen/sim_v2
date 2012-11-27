<?php
/* @var $this InvoicesDataController */
/* @var $model InvoicesData */

$this->breadcrumbs=array(
	'Invoices Datas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InvoicesData', 'url'=>array('index')),
	array('label'=>'Create InvoicesData', 'url'=>array('create')),
	array('label'=>'View InvoicesData', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InvoicesData', 'url'=>array('admin')),
);
?>

<h1>Update InvoicesData <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>