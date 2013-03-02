<?php
/* @var $this TariffsComponentsTypesController */
/* @var $model TariffsComponentsTypes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'tariffs-components-types-form',
	'enableAjaxValidation'=>true,
	'type'=>'horizontal',
)); ?>
<fieldset>
	<?php echo $form->errorSummary($model, 'Proszę poprawić następujące błędy:'); ?>
	<?php echo $form->textFieldRow($model,'type',array('size'=>60,'maxlength'=>255)); ?>
</fieldset>
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>($model->isNewRecord ? 'Utwórz' : 'Zapisz'))); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->