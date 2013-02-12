<?php
/* @var $this MediumsController */
/* @var $data Mediums */
?>

<tr>
	<td><?php echo CHtml::encode($data->name); ?></td>
	<td>
		<a href="<?php echo Yii::app()->createUrl('mediums/view', array('id'=>$data['id'])); ?>" title="podgląd"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/list.png" alt="podgląd" /></a>
		<a href="<?php echo Yii::app()->createUrl('mediums/update', array('id'=>$data['id'])); ?>" title="edycja"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/update.png" alt="edycja" /></a>
	</td>
</tr>