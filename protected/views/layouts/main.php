<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <?php
            $cs = Yii::app()->getClientScript();
            $cs->registerCssFile(Yii::app()->request->baseUrl.'/css/main.css');
        ?>
</head>

<body>

<div class="container-fluid wrapper" id="page">

        <?php
        $this->widget('bootstrap.widgets.TbNavbar', array(
    'brand'=>CHtml::encode(Yii::app()->name),
    'brandUrl'=>Yii::app()->baseUrl,
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
	    'type'=>'pills',
            'items'=>array(
                array('label'=>'PUNKTY POBORU', 'url'=>array('/collectionpoints')),
			array('label'=>'LICZNIKI', 'url'=>array('/counters')),
			array('label'=>'FAKTURY', 'url'=>array('/invoices')),
			array('label'=>'ZALOGUJ', 'url'=>array('/login'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'WYLOGUJ ('.Yii::app()->user->name.')', 'url'=>array('/logout'), 'visible'=>!Yii::app()->user->isGuest),
            ),
        ),
       )));
        ?>
	
	<?php echo $content; ?>
</div><!-- page -->

</body>
</html>

