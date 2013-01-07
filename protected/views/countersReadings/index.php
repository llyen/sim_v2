<?php
/* @var $this CountersReadingsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Counters Readings',
);

$this->menu=array(
        array('label'=>'ODCZYTY LICZNIKA'),
	array('label'=>'Powrót', 'url'=>array('/counters')),
	array('label'=>'Wyświetl odczyty', 'icon'=>'book', 'active'=>true, 'url'=>"$cid"),
        array('label'=>'Dodaj odczyt', 'icon'=>'pencil', 'url'=>"create/$cid"),
);
?>

<div class="window">
	<legend>Zestawienie odczytów licznika <?php echo Counters::model()->findByPk($cid)->symbol; ?></legend>
	<table>
		<thead>
			
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


