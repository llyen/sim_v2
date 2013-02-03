<?php
/* @var $this InvoicesController */
/* @var $model Invoices */

$this->breadcrumbs=array(
	'Invoices'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
        array('label'=>'FAKTURY'),
	array('label'=>'Wyświetl faktury', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz fakturę', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Edytuj fakturę</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'objects'=>$objects, 'suppliers'=>$suppliers, 'tariffs'=>$tariffs)); ?>