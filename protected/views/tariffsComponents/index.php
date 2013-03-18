<?php
/* @var $this TariffsComponentsController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Składniki taryf';

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
			<th>Dostawca</th>
			<th>Taryfa</th>
			<th>Nazwa</th>
			<th>Medium</th>
			<th>Data obowiązywania</th>
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