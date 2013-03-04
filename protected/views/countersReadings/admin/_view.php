<?php
/* @var $this CountersReadingsController */
/* @var $data CountersReadings */
?>

<tr>
	<td><?php echo CHtml::encode($data['reading_date']); ?></td>
	<td><?php echo CHtml::encode($data['counter_state']); ?></td>
	<td><?php echo CHtml::encode($data['use']); ?></td>
	<td><?php echo CHtml::encode($data['create_date']); ?></td>
	<td>
	    <a href="<?php echo Yii::app()->createUrl('countersReadings/adminView', array('cid'=>$data['counter_id'],'id'=>$data['id'])); ?>" title="podgląd"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/list.png" alt="podgląd" /></a>
	</td>
</tr>