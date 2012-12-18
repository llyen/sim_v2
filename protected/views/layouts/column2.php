<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span3">
    <div id="sidebar">
	<?php
		/*$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));*/
		$this->widget('bootstrap.widgets.TbMenu', array(
			'type'=>'list',
                        'stacked'=>true,
                        'items'=>$this->menu,
		));
		/*$this->endWidget();*/
	?>
	</div><!-- sidebar -->
	
</div>
<div class="span9" style="margin-left: 0px;">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>