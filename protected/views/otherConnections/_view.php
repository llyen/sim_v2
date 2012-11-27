<?php
/* @var $this OtherConnectionsController */
/* @var $data OtherConnections */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medium_id')); ?>:</b>
	<?php echo CHtml::encode($data->medium_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit')); ?>:</b>
	<?php echo CHtml::encode($data->unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('use')); ?>:</b>
	<?php echo CHtml::encode($data->use); ?>
	<br />


</div>