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
	    <a href="<?php echo Yii::app()->createUrl('invoicesData/adminView', array('iid'=>$data['invoice_id'],'id'=>$data['id'])); ?>" title="podgląd"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/list.png" alt="podgląd" /></a>
	</td>
</tr>