<?php
/* @var $this CollectionPointsController */
/* @var $data CollectionPoints */
?>

<tr>
	<td><?php echo CHtml::encode($data['unit']); ?></td>
	<td><?php echo CHtml::encode($data['symbol']); ?></td>
	<td><?php echo CHtml::encode($data['object']); ?></td>
	<!--<td><?php //echo CHtml::encode($data['multiplicand']); ?></td>-->
	<td><?php echo CHtml::encode($data['create_date']); ?></td>
	<td>
	    <a href="<?php echo Yii::app()->createUrl('collectionPoints/adminView', array('id'=>$data['id'])); ?>" title="podgląd"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/list.png" alt="podgląd" /></a>
	</td>
</tr>