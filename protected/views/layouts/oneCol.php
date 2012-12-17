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
    <div id="headerOneCol">
        <a href="<?php echo Yii::app()->request->baseurl; ?>" title="System Informacji o Mediach"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logotype.png" alt="sim - System Informacji o Mediach" /></a>
    </div><!-- header -->
    <div id="contentOneCol">
        <?php echo $content; ?>    
    </div><!-- content -->
</div><!-- container -->
</body>
</html>
