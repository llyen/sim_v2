<?php
/* @var $this CollectionPointsController */
/* @var $data CollectionPoints */
?>

<tr>
	<td><?php echo CHtml::encode($data->symbol); ?></td>
	<td><?php echo CHtml::encode($data->object->name); ?></td>
	<td><?php echo CHtml::encode($data->multiplicand); ?></td>
	<td><?php echo CHtml::encode($data->create_date); ?></td>
	<td><?php echo CHtml::encode($data->create_user); ?></td>
	<td><?php echo CHtml::encode($data->update_date); ?></td>
	<td><?php echo CHtml::encode($data->update_user); ?></td>
	<td>
	    <a href="<?php echo Yii::app()->createUrl('collectionpoints/update', array('id'=>$data->id)); ?>" title="edycja"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/update.png" alt="edycja" /></a>
	</td>
</tr>