<?php
/* @var $this InvoicesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Invoices',
);

$this->menu=array(
        array('label'=>'FAKTURY'),
	array('label'=>'Wyświetl faktury', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz fakturę', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Zestawienie faktur</legend>
	<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>


