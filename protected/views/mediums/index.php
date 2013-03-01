<?php
/* @var $this MediumsController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Medium';

$this->breadcrumbs=array(
	'Mediums',
);

$this->menu=array(
        array('label'=>'MEDIUM'),
	array('label'=>'Wyświetl listę', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Utwórz medium', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Medium</legend>
	<table>
		<thead>
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
