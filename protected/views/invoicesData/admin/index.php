<?php
/* @var $this InvoicesDataController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Zestawienie pozycji na fakturze';

$this->breadcrumbs=array(
	'Invoices Datas',
);

$this->menu=array(
        array('label'=>'POZYCJE NA FAKTURZE'),
	array('label'=>'Powrót', 'icon'=>'chevron-left', 'url'=>array('/invoices/adminIndex')),
	array('label'=>'Wyświetl pozycje', 'icon'=>'book', 'active'=>true, 'url'=>"$id"),
);
?>

<div class="window">
	<legend>Zestawienie pozycji na fakturze z dnia <?php echo Invoices::model()->findByPk($id)->issue_date; ?></legend>
	<table>
		<thead>
			<th>Taryfa</th>
			<th>Składnik</th>
			<th>Wartość</th>
			<th>Data utworzenia</th>
			<th>Opcje</th>
		</thead>
		<tbody>
			<?php
			$dataProvider->pagination->pageVar='p';
			$this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'admin/_view',
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
