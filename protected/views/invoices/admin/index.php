<?php
/* @var $this InvoicesController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Faktury';

$this->breadcrumbs=array(
	'Invoices',
);

$this->menu=array(
        array('label'=>'FAKTURY'),
	array('label'=>'Wyświetl faktury', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
);
?>

<div class="window">
	<legend>Zestawienie faktur</legend>
	<table>
		<thead>
			<th>Jednostka</th>
			<th>Status</th>
			<th>Obiekt</th>
			<th>Dostawca</th>
			<th>Okres od</th>
			<th>Okres do</th>
			<!--<th>Data wystawienia</th>-->
			<th>Operacje</th>
		</thead>
		<tbody>
			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'viewData'=>array('statuses'=>$statuses),
				'itemView'=>'admin/_view',
				'summaryText'=>'',
				'emptyText'=>'Brak danych.',
			)); ?>
		</tbody>
	</table>
</div>


