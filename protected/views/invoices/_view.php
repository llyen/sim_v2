<?php
/* @var $this InvoicesController */
/* @var $data Invoices */
?>

<tr>
	<td><?php echo CHtml::encode($data['object']); ?></td>
	<td><?php echo CHtml::encode($data['supplier']); ?></td>
	<td><?php echo CHtml::encode($data['period_since']); ?></td>
	<td><?php echo CHtml::encode($data['period_to']); ?></td>
	<td><?php echo CHtml::encode($data['issue_date']); ?></td>
	<td>
		<a href="<?php echo Yii::app()->createUrl('invoices/view', array('id'=>$data['id'])); ?>" title="podgląd"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/list.png" alt="podgląd" /></a>
	    <a href="<?php echo Yii::app()->createUrl('invoices/update', array('id'=>$data['id'])); ?>" title="edycja"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/update.png" alt="edycja" /></a>
	    <a href="<?php echo Yii::app()->createUrl('invoicesdata/'.$data['id']); ?>" title="pozycje na fakturze"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/table.png" alt="pozycje na fakturze" /></a>
	</td>
</tr>