<?php
/* @var $this InvoicesDataController */
/* @var $model InvoicesData */

$this->breadcrumbs=array(
	'Invoices Datas'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'POZYCJE NA FAKTURZE'),
	array('label'=>'Powrót', 'icon'=>'chevron-left', 'url'=>array('/invoices')),
	array('label'=>'Wyświetl pozycje', 'icon'=>'book', 'url'=>array("invoicesData/$iid")),
        array('label'=>'Dodaj pozycję', 'icon'=>'pencil', 'active'=>'true', 'url'=>"$iid"),
);
?>

<legend>Utwórz pozycję na fakturze</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'iid'=>$iid, 'tariffsComponents'=>$tariffsComponents)); ?>