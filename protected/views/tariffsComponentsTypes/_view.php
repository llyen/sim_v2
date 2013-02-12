<?php
/* @var $this TariffsComponentsTypesController */
/* @var $data TariffsComponentsTypes */
?>

<tr>
	<td><?php echo CHtml::encode($data->type); ?></td>
	<td>
		<a href="<?php echo Yii::app()->createUrl('tariffsComponentsTypes/view', array('id'=>$data['id'])); ?>" title="podgląd"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/list.png" alt="podgląd" /></a>
		<a href="<?php echo Yii::app()->createUrl('tariffsComponentsTypes/update', array('id'=>$data['id'])); ?>" title="edycja"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/update.png" alt="edycja" /></a>
	</td>
</tr>