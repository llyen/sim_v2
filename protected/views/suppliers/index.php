<?php
/* @var $this SuppliersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Suppliers',
);

$this->menu=array(
        array('label'=>'DOSTAWCY'),
	array('label'=>'Wyświetl listę dostawców', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz dostawcę', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Dostawcy</legend>
	<table>
		<thead>
			<th>Nazwa</th>
			<th>Medium</th>
			<th>Adres</th>
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
