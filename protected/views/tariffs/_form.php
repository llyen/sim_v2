<?php
/* @var $this TariffsController */
/* @var $model Tariffs */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'tariffs-form',
	'enableAjaxValidation'=>true,
	'type'=>'horizontal',
)); ?>

<fieldset>
	<?php echo $form->errorSummary($model, 'Proszę poprawić następujące błędy:'); ?>
	<?php echo $form->dropDownListRow($model, 'type_id', $types); ?>
	<?php echo $form->dropDownListRow($model, 'supplier_id', $suppliers); ?>
	<?php echo $form->textFieldRow($model,'name',array('size'=>60,'maxlength'=>255)); ?>
	<div class="control-group">
		<label class="control-label" for="Tariffs_mandatory_date">Data obowiązywania</label>
		<div class="controls">
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'id'=>'Tariffs_mandatory_date',
			'name'=>'Tariffs[mandatory_date]',
			// additional javascript options for the date picker plugin
			'options'=>array(
			'showAnim'=>'fold',
			'dateFormat'=>'yy-mm-dd',
			'firstDay'=>1,
			'changeMonth'=>true,
			'changeYear'=>true,
			),
		));	
		?>
		</div>
	</div>
</fieldset>
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>($model->isNewRecord ? 'Utwórz' : 'Zapisz'))); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->