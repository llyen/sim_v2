<?php
/* @var $this CountersReadingsController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Zestawienie odczytów';

$this->breadcrumbs=array(
	'Counters Readings',
);

$this->menu=array(
        array('label'=>'ODCZYTY LICZNIKA'),
	array('label'=>'Powrót', 'icon'=>'chevron-left', 'url'=>array('/counters')),
	array('label'=>'Wyświetl odczyty', 'icon'=>'book', 'active'=>true, 'url'=>"$cid"),
        array('label'=>'Dodaj odczyt', 'icon'=>'pencil', 'url'=>"create/$cid"),
);
?>

<div class="window">
	<legend>Zestawienie odczytów licznika <?php echo Counters::model()->findByPk($cid)->symbol; ?></legend>
	<table>
		<thead>
			<th>Data odczytu</th>
			<th>Stan licznika</th>
			<th>Zużycie</th>
			<?php
				if($type)
				{
			?>
			<th>Stan licznika (taryfa nocna)</th>
			<th>Zużycie (taryfa nocna)</th>
			<?php
				}
			?>
			<th>Data utworzenia</th>
			<th>Opcje</th>
		</thead>
		<tbody>
			<?php
			$dataProvider->pagination->pageVar='p';
			$this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
				'viewData'=>array('type'=>$type),
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


