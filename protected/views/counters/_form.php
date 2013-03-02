<?php
/* @var $this CountersController */
/* @var $model Counters */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'counters-form',
	'enableAjaxValidation'=>true,
	'type'=>'horizontal',
)); ?>
<fieldset>
	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->dropDownListRow($model, 'collection_point_id', $collectionPoints); ?>
	<?php echo $form->dropDownListRow($model, 'medium_id', $mediums); ?>
	<?php echo $form->textFieldRow($model, 'symbol', array('size'=>60, 'maxlength'=>255)); ?>
	<?php echo $form->textFieldRow($model, 'unit', array('size'=>10, 'maxlength'=>10)); ?>
	<?php echo $form->textFieldRow($model, 'initial_state', array('size'=>10, 'maxlength'=>10)); ?>
	<div class="control-group">
		<label class="control-label" for="Counters_installation_date">Data instalacji</label>
		<div class="controls">
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'id'=>'Counters_installation_date',
			'name'=>'Counters[installation_date]',
			'attribute'=>'installation_date',
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
	<div class="control-group">
		<label class="control-label" for="Counters_archival">Archiwalny</label>
		<div class="controls">
		<?php
		$this->widget('bootstrap.widgets.TbToggleButton', array(
			'id'=>'Counters_archival',
			'name'=>'Counters[archival]',
			'attribute'=>'archival',
			'model'=>$model,
			'enabledLabel' => 'TAK',
			'disabledLabel' => 'NIE',
			'value'=>false,
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