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
	<table>
		<thead>
			<th>Obiekt</th>
			<th>Dostawca</th>
			<th>Okres od</th>
			<th>Okres do</th>
			<th>Data wystawienia</th>
			<th>Operacje</th>
		</thead>
		<tbody>
			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
				'summaryText'=>'',
				'emptyText'=>'Brak danych.',
			)); ?>
		</tbody>
	</table>
</div>


