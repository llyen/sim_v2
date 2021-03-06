<?php
/* @var $this InvoicesController */
/* @var $model Invoices */
/* @var $form CActiveForm */


$this->menu=array(
        array('label'=>'FAKTURY'),
	array('label'=>'Wyświetl faktury', 'icon'=>'book', 'url'=>array('adminIndex')),
	array('label'=>'Pozycje na fakturze', 'icon'=>'list', 'url'=>array("invoicesData/adminIndex/$model->id")),
);
?>

<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'invoices-form',
	'enableAjaxValidation'=>true,
	'type'=>'horizontal',
)); ?>
<fieldset>
	<?php echo $form->errorSummary($model, 'Proszę poprawić następujące błędy:'); ?>
	<?php echo $form->dropDownListRow($model, 'status', $statuses); ?>
	<?php echo $form->dropDownListRow($model, 'object_id', $objects, array('disabled'=>true)); ?>
	<?php echo $form->dropDownListRow($model, 'supplier_id', $suppliers, array('disabled'=>true)); ?>
	<?php echo $form->dropDownListRow($model, 'tariff_id', $tariffs, array('disabled'=>true)); ?>
	<?php echo $form->textFieldRow($model, 'period_since', array('disabled'=>true)); ?>
        <?php echo $form->textFieldRow($model, 'period_to', array('disabled'=>true)); ?>
        <?php echo $form->textFieldRow($model, 'issue_date', array('disabled'=>true)); ?>
	<div class="control-group">
		<label class="control-label" for="Invoices_status">Aktualny skan faktury</label>
		<div class="controls" style="line-height: 2em;">
		<?php if(!is_null($model->file_src)) echo '<a href="'.Yii::app()->request->baseUrl.'/invs/'.$unit->unit_id.'/'.$model->object_id.'/'.$model->file_src.'" title="podgląd dokumentu" target="_blank"><img src="'.Yii::app()->request->baseUrl.'/images/pdf.png" alt="podgląd dokumentu" /></a>'; else echo 'Brak powiązanego pliku.' ?>
		</div>
	</div>
	<?php echo $form->textAreaRow($model, 'note', array('class'=>'span6', 'rows'=>8)); ?>
</fieldset>
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Zapisz')); ?>
</div>
<?php $this->endWidget(); ?>
</div><!-- form -->