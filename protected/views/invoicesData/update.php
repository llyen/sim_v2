<?php
/* @var $this InvoicesDataController */
/* @var $model InvoicesData */

$this->breadcrumbs=array(
	'Invoices Datas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
        array('label'=>'POZYCJE NA FAKTURZE'),
	array('label'=>'Powrót', 'icon'=>'chevron-left', 'url'=>array('/invoices')),
	array('label'=>'Wyświetl pozycje', 'icon'=>'book', 'url'=>array("invoicesdata/$iid")),
        array('label'=>'Dodaj pozycję', 'icon'=>'pencil', 'url'=>array("invoicesdata/create/$iid")),
);
?>

<legend>Edytuj pozycję na fakturze</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'iid'=>$iid, 'tariffsComponents'=>$tariffsComponents)); ?>