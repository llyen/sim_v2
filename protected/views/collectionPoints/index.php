<?php
/* @var $this CollectionPointsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Collection Points',
);

$this->menu=array(
        array('label'=>'PUNKTY POBORU'),
	array('label'=>'Wyświetl punkty poboru', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz punkt poboru', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Zestawienie punktów poboru dla jednostki</legend>
	<table>
		<thead>
			<th>Symbol</th>
			<th>Obiekt</th>
			<th>Mnożnik</th>
			<th>Data utworzenia</th>
			<th>Utworzony przez</th>
			<th>Data aktualizacji</th>
			<th>Aktualizowany przez</th>
			<th>Opcje</th>
		</thead>
		<tbody>
			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
				'summaryText'=>'',//'summaryText'=>'Wyświetlono rekordy {start}-{end} z {count}.',
				'emptyText'=>'Brak danych.',
				));
			?>
		</tbody>
	</table>
</div>

