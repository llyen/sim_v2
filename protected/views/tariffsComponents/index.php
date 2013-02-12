<?php
/* @var $this TariffsComponentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tariffs Components',
);

$this->menu=array(
        array('label'=>'SKŁADNIKI TARYF'),
	array('label'=>'Wyświetl listę', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz składnik', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Składniki taryf</legend>
	<table>
		<thead>
			<th>Taryfa</th>
			<th>Nazwa</th>
			<th>Medium</th>
			<th>Data obowiązywania</th>
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