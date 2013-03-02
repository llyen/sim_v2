<?php
/* @var $this InvoicesDataController */
/* @var $model InvoicesData */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'invoices-data-form',
	'enableAjaxValidation'=>true,
	'type'=>'horizontal',
)); ?>
<fieldset>
	<?php echo $form->errorSummary($model, 'Proszę poprawić następujące błędy:'); ?>
	<?php echo $form->hiddenField($model, 'invoice_id', array('value'=>$iid)); ?>
	<?php echo $form->dropDownListRow($model, 'component_id', $tariffsComponents); ?>
	<?php echo $form->textFieldRow($model, 'value', array('size'=>10, 'maxlength'=>10)); ?>
</fieldset>
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>($model->isNewRecord ? 'Utwórz' : 'Zapisz'))); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>
<?php $this->endWidget(); ?>
</div><!-- form -->