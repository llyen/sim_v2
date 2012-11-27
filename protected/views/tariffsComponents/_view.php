<?php
/* @var $this TariffsComponentsController */
/* @var $data TariffsComponents */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tariff_id')); ?>:</b>
	<?php echo CHtml::encode($data->tariff_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_id')); ?>:</b>
	<?php echo CHtml::encode($data->type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medium_id')); ?>:</b>
	<?php echo CHtml::encode($data->medium_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit')); ?>:</b>
	<?php echo CHtml::encode($data->unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mandatory_date')); ?>:</b>
	<?php echo CHtml::encode($data->mandatory_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('price_per_unit')); ?>:</b>
	<?php echo CHtml::encode($data->price_per_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vat')); ?>:</b>
	<?php echo CHtml::encode($data->vat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('multiplier')); ?>:</b>
	<?php echo CHtml::encode($data->multiplier); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('archival')); ?>:</b>
	<?php echo CHtml::encode($data->archival); ?>
	<br />

	*/ ?>

</div>