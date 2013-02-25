<?php
/* @var $this ObjectsController */
/* @var $data Objects */
?>

<tr>
	<td><?php echo CHtml::encode($data['unit']); ?></td>
	<td><?php echo CHtml::encode($data['name']); ?></td>
	<td><?php echo CHtml::encode($data['address']); ?></td>
	<td>
		<a href="<?php echo Yii::app()->createUrl('objects/view', array('id'=>$data['id'])); ?>" title="podgląd"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/list.png" alt="podgląd" /></a>
		<a href="<?php echo Yii::app()->createUrl('objects/update', array('id'=>$data['id'])); ?>" title="edycja"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/update.png" alt="edycja" /></a>
		<a href="<?php echo Yii::app()->createUrl('objects/delete', array('id'=>$data['id'])); ?>" title="usuwanie"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/delete.png" alt="usuwanie" /></a>
	</td>
</tr>