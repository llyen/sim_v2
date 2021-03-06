<?php
/* @var $this CountersController */
/* @var $data Counters */
?>

<tr>
	<td><?php echo CHtml::encode($data['collection_point']); ?></td>
	<td><?php echo CHtml::encode($data['medium']); ?></td>
	<td><?php echo CHtml::encode($data['symbol']); ?></td>
	<td><?php echo CHtml::encode($data['installation_date']); ?></td>
	<td><?php echo ($data['archival']) ? 'TAK' : 'NIE'; ?></td>
	<td>
	    <a href="<?php echo Yii::app()->createUrl('counters/view', array('id'=>$data['id'])); ?>" title="podgląd"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/list.png" alt="podgląd" /></a>
	    <a href="<?php echo Yii::app()->createUrl('counters/update', array('id'=>$data['id'])); ?>" title="edycja"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/update.png" alt="edycja" /></a>
	    <a href="<?php echo Yii::app()->createUrl('countersReadings/'.$data['id']); ?>" title="odczyty licznika"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/table.png" alt="odczyty licznika" /></a>
	</td>
</tr>