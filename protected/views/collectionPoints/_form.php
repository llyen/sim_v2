<?php
/* @var $this CollectionPointsController */
/* @var $model CollectionPoints */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'collection-points-form',
	'enableAjaxValidation'=>true,
	'type'=>'horizontal',
)); ?>
<fieldset>
	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->dropDownListRow($model, 'object_id', $objects); ?>
	<?php echo $form->textFieldRow($model, 'symbol', array('size'=>60, 'maxlength'=>255)); ?>
	<?php echo $form->textFieldRow($model, 'multiplicand', array('size'=>10, 'maxlength'=>10)); ?>
	<?php if($model->isNewRecord)
	{
	?>
	<div class="control-group">
		<label class="control-label" for="CollectionPoints_create_date">Data utworzenia</label>
		<div class="controls">
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'id'=>'CollectionPoints_create_date',
			'name'=>'CollectionPoints[create_date]',
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
	<?php
	}
	?>
	<?php //echo $form->textFieldRow($model, 'create_date'); ?>
	<!-- create_user, update_date, update_user -->
</fieldset>
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>($model->isNewRecord ? 'Utwórz' : 'Zapisz'))); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->