<?php
/* @var $this InvoicesController */
/* @var $model Invoices */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'invoices-form',
	'enableAjaxValidation'=>true,
	'type'=>'horizontal',
)); ?>
<fieldset>
	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->dropDownListRow($model, 'object_id', $objects); ?>
	<?php echo $form->dropDownListRow($model, 'supplier_id', $suppliers); ?>
	<?php echo $form->dropDownListRow($model, 'tariff_id', $tariffs); ?>
	<div class="control-group">
		<label class="control-label" for="Invoices_period_since">Okres od</label>
		<div class="controls">
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'id'=>'Invoices_period_since',
			'name'=>'Invoices[period_since]',
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
		<label class="control-label" for="Invoices_period_to">Okres do</label>
		<div class="controls">
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'id'=>'Invoices_period_to',
			'name'=>'Invoices[period_to]',
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
		<label class="control-label" for="Invoices_issue_date">Data wystawienia</label>
		<div class="controls">
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'id'=>'Invoices_issue_date',
			'name'=>'Invoices[issue_date]',
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