<?php
/* @var $this CountersReadingsController */
/* @var $data CountersReadings */
?>

<tr>
	<td><?php echo CHtml::encode($data['reading_date']); ?></td>
	<td><?php echo CHtml::encode($data['counter_state']); ?></td>
	<td><?php echo CHtml::encode($data['use']); ?></td>
	<?php
		if($type)
		{
	?>
	<td><?php echo CHtml::encode($data['counter_state_second']); ?></td>
	<td><?php echo CHtml::encode($data['use_second']); ?></td>
	<?php
		}
	?>
	<td><?php echo CHtml::encode($data['create_date']); ?></td>
	<td>
	    <a href="<?php echo Yii::app()->createUrl('countersReadings/view', array('cid'=>$data['counter_id'],'id'=>$data['id'])); ?>" title="podgląd"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/list.png" alt="podgląd" /></a>
	    <a href="<?php echo Yii::app()->createUrl('countersReadings/update', array('cid'=>$data['counter_id'],'id'=>$data['id'])); ?>" title="edycja"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/update.png" alt="edycja" /></a>
	    <a href="<?php echo Yii::app()->createUrl('countersReadings/delete', array('cid'=>$data['counter_id'],'id'=>$data['id'])); ?>" title="usuwanie"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/delete.png" alt="usuwanie" /></a>
	</td>
</tr>