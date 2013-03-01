<?php
/* @var $this UnitsController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Jednostki';

$this->breadcrumbs=array(
	'Units',
);

$this->menu=array(
        array('label'=>'JEDNOSTKI'),
	array('label'=>'Wyświetl jednostki', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz jednostkę', 'icon'=>'pencil', 'url'=>array('create')),
);
?>
<div class="window">
	<legend>Jednostki</legend>
	<table>
		<thead>
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