<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<?php
            $cs = Yii::app()->getClientScript();
            $cs->registerCssFile(Yii::app()->request->baseUrl.'/css/sim.css');
        ?>
</head>
<body>
<div id="container">
    <div id="header">
        <a href="<?php echo Yii::app()->request->baseurl; ?>" title="System Informacji o Mediach"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logotype.png" alt="sim - System Informacji o Mediach" /></a>
    </div><!-- header -->
    <div id="content">
	<div id="menu">
		<?php $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'PUNKTY POBORU', 'url'=>array('/collectionpoints')),
			array('label'=>'LICZNIKI', 'url'=>array('/counters')),
			array('label'=>'FAKTURY', 'url'=>array('/invoices')),
			array('label'=>'ZALOGUJ', 'url'=>array('/login'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'WYLOGUJ ('.Yii::app()->user->name.')', 'url'=>array('/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- menu -->
	<div class="clear"></div>
	
        <?php echo $content; ?>    
    </div><!-- content -->
</div><!-- container -->
</body>
</html>
