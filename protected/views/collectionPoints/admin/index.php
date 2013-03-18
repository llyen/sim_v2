<?php
/* @var $this CollectionPointsController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Punkty poboru';

$this->breadcrumbs=array(
	'Collection Points',
);

$this->menu=array(
        array('label'=>'PUNKTY POBORU'),
	array('label'=>'Wyświetl punkty poboru', 'icon'=>'book', 'active'=>true, 'url'=>array('adminIndex')),
);
?>

<div class="window">
	<legend>Punkty poboru</legend>
	<table>
		<thead>
			<th>Jednostka</th>
			<th>Symbol</th>
			<th>Obiekt</th>
			<!--<th>Mnożnik</th>-->
			<th>Data utworzenia</th>
			<th>Opcje</th>
		</thead>
		<tbody>
			<?php
			$dataProvider->pagination->pageVar='p';
			$this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'admin/_view',
				'summaryText'=>'',//'summaryText'=>'Wyświetlono rekordy {start}-{end} z {count}.',
				'emptyText'=>'Brak danych.',
				'pager'=>array(
					'nextPageLabel'=>'Następna &raquo;',
					'prevPageLabel'=>'&laquo; Poprzednia',
					'header'=>'',
				),
			));
			?>
		</tbody>
	</table>
</div>

