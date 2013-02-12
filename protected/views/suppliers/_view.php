<?php
/* @var $this SuppliersController */
/* @var $data Suppliers */
?>

<tr>
	<td><?php echo CHtml::encode($data['medium']); ?></td>
	<td><?php echo CHtml::encode($data['name']); ?></td>
	<td><?php echo CHtml::encode($data['address']); ?></td>
	<td>
		<a href="<?php echo Yii::app()->createUrl('suppliers/view', array('id'=>$data['id'])); ?>" title="podgląd"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/list.png" alt="podgląd" /></a>
		<a href="<?php echo Yii::app()->createUrl('suppliers/update', array('id'=>$data['id'])); ?>" title="edycja"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/update.png" alt="edycja" /></a>
	</td>
</tr>