<?php
/* @var $this TariffsComponentsController */
/* @var $data TariffsComponents */
?>

<tr>
	<td><?php echo CHtml::encode($data['supplier']); ?></td>
	<td><?php echo CHtml::encode($data['tariff']); ?></td>
	<td><?php echo CHtml::encode($data['name']); ?></td>
	<td><?php echo CHtml::encode($data['medium']); ?></td>
	<td><?php echo CHtml::encode($data['mandatory_date']); ?></td>
	<td>
		<a href="<?php echo Yii::app()->createUrl('tariffsComponents/view', array('id'=>$data['id'])); ?>" title="podgląd"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/list.png" alt="podgląd" /></a>
		<a href="<?php echo Yii::app()->createUrl('tariffsComponents/update', array('id'=>$data['id'])); ?>" title="edycja"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/update.png" alt="edycja" /></a>
	</td>
</tr>