<?php
/* @var $this InvoicesController */
/* @var $model Invoices */

$this->breadcrumbs=array(
	'Invoices'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'FAKTURY'),
	array('label'=>'Wyświetl faktury', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz fakturę', 'icon'=>'pencil', 'active'=>true, 'url'=>array('create')),
);
?>

<legend>Utwórz fakturę</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'objects'=>$objects, 'suppliers'=>$suppliers, 'tariffs'=>$tariffs, 'statuses'=>$statuses)); ?>