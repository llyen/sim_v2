<?php
/* @var $this UnitsController */
/* @var $data Units */
?>

<tr>
	<td><?php echo CHtml::encode($data->name); ?></td>
	<td><?php echo CHtml::encode($data->address); ?></td>
	<td>
		<a href="<?php echo Yii::app()->createUrl('units/view', array('id'=>$data['id'])); ?>" title="podgląd"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/list.png" alt="podgląd" /></a>
		<a href="<?php echo Yii::app()->createUrl('units/update', array('id'=>$data['id'])); ?>" title="edycja"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/update.png" alt="edycja" /></a>
	</td>
	
</tr>