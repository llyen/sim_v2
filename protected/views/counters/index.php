<?php
/* @var $this CountersController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Zestawienie liczników';

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
			<?php
			$dataProvider->pagination->pageVar='p';
			$this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
				'summaryText'=>'',
				'emptyText'=>'Brak danych.',
				'pager'=>array(
					'nextPageLabel'=>'Następna &raquo;',
					'prevPageLabel'=>'&laquo; Poprzednia',
					'header'=>'',
				),
			)); ?>
		</tbody>
	</table>
</div>

