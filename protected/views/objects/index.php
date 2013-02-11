<?php
/* @var $this ObjectsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Objects',
);

$this->menu=array(
        array('label'=>'OBIEKTY'),
	array('label'=>'Wyświetl obiekty', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz obiekt', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Obiekt</legend>
	<table>
		<thead>
			<th>Jednostka</th>
			<th>Nazwa</th>
			<th>Adres</th>
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


