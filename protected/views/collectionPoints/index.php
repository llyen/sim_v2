<?php
/* @var $this CollectionPointsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Collection Points',
);

$this->menu=array(
	array('label'=>'Create CollectionPoints', 'url'=>array('create')),
	array('label'=>'Manage CollectionPoints', 'url'=>array('admin')),
);
?>
<div class="window">
	<div class="title">Zestawienie punktów poboru dla jednostki</div>
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

