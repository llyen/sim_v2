<?php
/* @var $this InvoicesController */
/* @var $data Invoices */
?>

<tr>
	<td><?php echo CHtml::encode($data['unit']); ?></td>
	<td>
		<?php
		switch($data['status'])
		{
			case 1:
				$type = 'success';
				break;
			
			case 2:
				$type = 'important';
				break;
			
			default:
				$type = 'info';
		}
		$this->widget('bootstrap.widgets.TbLabel', array(
				'type'=>$type,
				'label'=>$statuses[$data['status']],
			));
		?>
	</td>
	<td><?php echo CHtml::encode($data['object']); ?></td>
	<td><?php echo CHtml::encode($data['supplier']); ?></td>
	<td><?php echo CHtml::encode($data['period_since']); ?></td>
	<td><?php echo CHtml::encode($data['period_to']); ?></td>
	<!--<td><?php //echo CHtml::encode($data['issue_date']); ?></td>-->
	<td>
		<a href="<?php echo Yii::app()->createUrl('invoices/adminView', array('id'=>$data['id'])); ?>" title="podgląd"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/list.png" alt="podgląd" /></a>
	    <a href="<?php echo Yii::app()->createUrl('invoicesData/adminIndex', array('id'=>$data['id'])); ?>" title="pozycje na fakturze"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/table.png" alt="pozycje na fakturze" /></a>
	</td>
</tr>