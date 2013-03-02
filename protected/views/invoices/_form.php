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
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>
<fieldset>
	<?php echo $form->errorSummary($model); ?>
	<?php
		if(!Yii::app()->user->isGuest && Yii::app()->user->getRole() == 'admin')
		{
			echo $form->dropDownListRow($model, 'status', $statuses);
		}
		else
		{
	?>
	<div class="control-group">
		<label class="control-label" for="Invoices_status">Status</label>
		<div class="controls" style="line-height: 2em;">
			<?php
				switch($model->status)
				{
					case 1:
						$type = 'success';
						break;
			
					case 2:
						$type = 'important';
						break;
			
					default:
						$type = 'info';
				}
		
			$this->widget('bootstrap.widgets.TbLabel', array(
				'type'=>$type,
				'label'=>$statuses[$model->status],
			));
			?>
		</div>
	</div>
	<?php
		}
	?>
	<?php echo $form->dropDownListRow($model, 'object_id', $objects); ?>
	<?php
		echo $form->dropDownListRow($model, 'supplier_id', $suppliers,
			array(
				'empty'=>'-- proszę wybrać dostawcę --',
				'ajax'=>array(
					'type'=>'POST',
					'data'=>array('supplier_id'=>'js:this.value'),
					'url'=>CController::createURL('invoices/dynamicTariffs'),
					'update'=>'#'.CHtml::activeId($model, 'tariff_id')//'#tariff_id', 
				),
			)
		);
	
	?>
	<?php echo $form->dropDownListRow($model, 'tariff_id', array());//echo $form->dropDownListRow($model, 'tariff_id', $tariffs); ?>
	<div class="control-group">
		<label class="control-label" for="Invoices_period_since">Okres od</label>
		<div class="controls">
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'id'=>'Invoices_period_since',
			'name'=>'Invoices[period_since]',
			'attribute'=>'period_since',
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
		<label class="control-label" for="Invoices_period_to">Okres do</label>
		<div class="controls">
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'id'=>'Invoices_period_to',
			'name'=>'Invoices[period_to]',
			'attribute'=>'period_to',
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
		<label class="control-label" for="Invoices_issue_date">Data wystawienia</label>
		<div class="controls">
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'id'=>'Invoices_issue_date',
			'name'=>'Invoices[issue_date]',
			'attribute'=>'issue_date',
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
	<?php
	if(!$model->isNewRecord && !is_null($model->file_src))
	{
	?>
	<div class="control-group">
		<label class="control-label" for="Invoices_status">Aktualny skan faktury</label>
		<div class="controls" style="line-height: 2em;">
		<?php echo '<a href="'.Yii::app()->request->baseUrl.'/invs/'.Yii::app()->user->getState('unit_id').'/'.$model->object_id.'/'.$model->file_src.'" title="podgląd dokumentu"><img src="'.Yii::app()->request->baseUrl.'/images/pdf.png" alt="podgląd dokumentu" /></a>'; ?>
		</div>
	</div>
	<?php
	}
	?>
	<?php echo $form->fileFieldRow($model, 'file_src'); ?>
</fieldset>
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>($model->isNewRecord ? 'Utwórz' : 'Zapisz'))); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>
<?php $this->endWidget(); ?>
</div><!-- form -->