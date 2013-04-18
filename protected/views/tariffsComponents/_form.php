<?php
/* @var $this TariffsComponentsController */
/* @var $model TariffsComponents */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'tariffs-components-form',
	'enableAjaxValidation'=>true,
	'type'=>'horizontal',
)); ?>
<fieldset>
	<?php echo $form->errorSummary($model, 'Proszę poprawić następujące błędy:'); ?>
	<?php echo $form->dropDownListRow($model, 'tariff_id', $tariffs); ?>
	<?php echo $form->dropDownListRow($model, 'type_id', $types); ?>
	<?php echo $form->dropDownListRow($model, 'medium_id', $mediums); ?>
	<?php echo $form->textFieldRow($model,'name',array('size'=>60,'maxlength'=>255)); ?>
	<?php echo $form->textFieldRow($model,'unit',array('size'=>10,'maxlength'=>10)); ?>
	<div class="control-group">
		<label class="control-label" for="TariffsComponents_mandatory_date">Data obowiązywania</label>
		<div class="controls">
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'id'=>'TariffsComponents_mandatory_date',
			'name'=>'TariffsComponents[mandatory_date]',
			'attribute'=>'mandatory_date',
			'model'=>$model,
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
	<?php echo $form->textFieldRow($model,'price_per_unit',array('size'=>10,'maxlength'=>10)); ?>
	<?php echo $form->textFieldRow($model,'vat'); ?>
	<?php echo $form->textFieldRow($model,'multiplier',array('size'=>10,'maxlength'=>10)); ?>
	<?php echo $form->dropDownListRow($model,'archival', array(false=>'nie', true=>'tak')); ?>
</fieldset>
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>($model->isNewRecord ? 'Utwórz' : 'Zapisz'))); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->