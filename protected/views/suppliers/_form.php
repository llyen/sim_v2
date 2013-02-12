<?php
/* @var $this SuppliersController */
/* @var $model Suppliers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'suppliers-form',
	'enableAjaxValidation'=>true,
	'type'=>'horizontal',
)); ?>

<fieldset>
	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->dropDownListRow($model, 'medium_id', $mediums); ?>
	<?php echo $form->textFieldRow($model,'name',array('size'=>60,'maxlength'=>150)); ?>
	<?php echo $form->textFieldRow($model,'address',array('size'=>60,'maxlength'=>255)); ?>
</fieldset>
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>($model->isNewRecord ? 'Utwórz' : 'Zapisz'))); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->