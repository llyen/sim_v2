<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="pl" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
        
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/sim.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
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
	<div class="clear" />
        <?php echo $content; ?>    
    </div><!-- content -->
</div><!-- container -->
</body>
</html>
