<?php
/* @var $this TariffsComponentsTypesController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Typy składników taryf';

$this->breadcrumbs=array(
	'Tariffs Components Types',
);


$this->menu=array(
        array('label'=>'TYPY SKŁADNIKÓW TARYF'),
	array('label'=>'Wyświetl listę typów', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz typ składnika', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Typy składników taryf</legend>
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

