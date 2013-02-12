<?php
/* @var $this TariffsTypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tariffs Types',
);

$this->menu=array(
        array('label'=>'TYPY TARYF'),
	array('label'=>'Wyświetl listę typów', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz typ taryfy', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Typy taryf</legend>
	<table>
		<thead>
			<th>Typ</th>
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
