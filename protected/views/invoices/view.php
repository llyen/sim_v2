<?php
/* @var $this InvoicesController */
/* @var $model Invoices */

$this->pageTitle=Yii::app()->name . ' :: Szczegóły faktury';

$this->breadcrumbs=array(
	'Invoices'=>array('index'),
	$model->id,
);

$this->menu=array(
        array('label'=>'FAKTURY'),
	array('label'=>'Wyświetl faktury', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz fakturę', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Szczegóły</legend>

<?php

ob_start();
switch($model->status)
{
	case 1:
		$type = 'success';
		break;
		
	case 2:
		$type = 'important';
		break;
		
	default:
		$type = 'info';
}
$this->widget('bootstrap.widgets.TbLabel', array(
		'type'=>$type,
		'label'=>$statuses[$model->status],
	));
$tbLabel = ob_get_contents();
ob_end_clean();

?>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
		      'name'=>'status',
		      'type'=>'raw',
		      'value'=>$tbLabel,
		),
		array('name'=>'tariff.name', 'label'=>'Taryfa'),
		array('name'=>'object.name', 'label'=>'Obiekt'),
		array('name'=>'supplier.name', 'label'=>'Dostawca'),
		'period_since',
		'period_to',
		'issue_date',
		array(
		      'name'=>'file_src',
		      'type'=>'raw',
		      'value'=>(is_null($model->file_src)) ? 'Brak powiązanego pliku.' : '<a href="'.Yii::app()->request->baseUrl.'/invs/'.Yii::app()->user->getState('unit_id').'/'.$model->object_id.'/'.$model->file_src.'" title="podgląd dokumentu"><img src="'.Yii::app()->request->baseUrl.'/images/pdf.png" alt="podgląd dokumentu" /></a>',
		),
		'note',
		'create_date',
		'create_user',
		'update_date',
		'update_user',
	),
)); ?>
