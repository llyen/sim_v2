<?php
/* @var $this CountersController */
/* @var $model Counters */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'counters-readings-form',
	'enableAjaxValidation'=>true,
	'type'=>'horizontal',
)); ?>
<fieldset>
	<?php echo $form->errorSummary($model, 'Proszę poprawić następujące błędy:'); ?>
	<?php echo $form->hiddenField($model, 'counter_id', array('value'=>$cid)); ?>
	
	<div class="control-group">
		<label class="control-label" for="CountersReadings_reading_date">Data odczytu</label>
		<div class="controls">
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'id'=>'CountersReadings_reading_date',
			'name'=>'CountersReadings[reading_date]',
			'attribute'=>'reading_date',
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
	
	<?php echo $form->textFieldRow($model, 'counter_state', array('size'=>10, 'maxlength'=>10)); ?>
	<?php echo $form->textFieldRow($model, 'use', array('size'=>10, 'maxlength'=>10)); ?>
	
</fieldset>
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>($model->isNewRecord ? 'Utwórz' : 'Zapisz'))); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>
<?php $this->endWidget(); ?>
</div><!-- form -->