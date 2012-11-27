<?php
/* @var $this CountersReadingsController */
/* @var $data CountersReadings */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('counter_id')); ?>:</b>
	<?php echo CHtml::encode($data->counter_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reading_date')); ?>:</b>
	<?php echo CHtml::encode($data->reading_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('counter_state')); ?>:</b>
	<?php echo CHtml::encode($data->counter_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('use')); ?>:</b>
	<?php echo CHtml::encode($data->use); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user')); ?>:</b>
	<?php echo CHtml::encode($data->create_user); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user')); ?>:</b>
	<?php echo CHtml::encode($data->update_user); ?>
	<br />

	*/ ?>

</div>