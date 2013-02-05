<?php
/* @var $this InvoicesDataController */
/* @var $data InvoicesData */
?>

<tr>
	<td><?php echo CHtml::encode($data['tariff']); ?></td>
	<td><?php echo CHtml::encode($data['component']); ?></td>
	<td><?php echo CHtml::encode($data['value']); ?></td>
	<td><?php echo CHtml::encode($data['create_date']); ?></td>
	<td>
	    <a href="<?php echo Yii::app()->createUrl('invoicesData/view', array('iid'=>$data['invoice_id'],'id'=>$data['id'])); ?>" title="podgląd"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/list.png" alt="podgląd" /></a>
	    <a href="<?php echo Yii::app()->createUrl('invoicesData/update', array('iid'=>$data['invoice_id'],'id'=>$data['id'])); ?>" title="edycja"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/update.png" alt="edycja" /></a>
	    <a href="<?php echo Yii::app()->createUrl('invoicesData/delete', array('iid'=>$data['invoice_id'],'id'=>$data['id'])); ?>" title="usuwanie"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/delete.png" alt="usuwanie" /></a>
	</td>
</tr>