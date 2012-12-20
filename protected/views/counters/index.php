<?php
/* @var $this CountersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Counters',
);

$this->menu=array(
        array('label'=>'LICZNIKI'),
	array('label'=>'Wyświetl liczniki', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz licznik', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Zestawienie liczników dla jednostki</legend>
	<table>
		<thead>
			<th>Punkt poboru</th>
			<th>Medium</th>
			<th>Symbol</th>
			<th>Data instalacji</th>
			<th>Archiwalny</th>
			<th>Opcje</th>
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

