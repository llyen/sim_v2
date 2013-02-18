<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<tr>
	<td><?php echo CHtml::encode($data['unit']); ?></td>
	<td><?php echo CHtml::encode($data['username']); ?></td>
	<td>
		<a href="<?php echo Yii::app()->createUrl('users/view', array('id'=>$data['id'])); ?>" title="podgląd"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/list.png" alt="podgląd" /></a>
		<a href="<?php echo Yii::app()->createUrl('users/update', array('id'=>$data['id'])); ?>" title="edycja"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/update.png" alt="edycja" /></a>
	</td>
</tr>