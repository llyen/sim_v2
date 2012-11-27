<?php
/* @var $this CountersController */
/* @var $data Counters */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('collection_point_id')); ?>:</b>
	<?php echo CHtml::encode($data->collection_point_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medium_id')); ?>:</b>
	<?php echo CHtml::encode($data->medium_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('symbol')); ?>:</b>
	<?php echo CHtml::encode($data->symbol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit')); ?>:</b>
	<?php echo CHtml::encode($data->unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('initial_state')); ?>:</b>
	<?php echo CHtml::encode($data->initial_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('installation_date')); ?>:</b>
	<?php echo CHtml::encode($data->installation_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('archival')); ?>:</b>
	<?php echo CHtml::encode($data->archival); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user')); ?>:</b>
	<?php echo CHtml::encode($data->create_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user')); ?>:</b>
	<?php echo CHtml::encode($data->update_user); ?>
	<br />

	*/ ?>

</div>