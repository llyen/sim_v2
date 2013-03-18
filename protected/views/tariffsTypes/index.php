<?php
/* @var $this TariffsTypesController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Typy taryf';

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
