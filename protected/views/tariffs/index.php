<?php
/* @var $this TariffsController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Taryfy';

$this->breadcrumbs=array(
	'Tariffs',
);

$this->menu=array(
        array('label'=>'TARYFY'),
	array('label'=>'Wyświetl listę', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz taryfę', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Taryfy</legend>
	<table>
		<thead>
			<th>Dostawca</th>
			<th>Typ</th>
			<th>Data obowiązywania</th>
			<th>Nazwa</th>
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
