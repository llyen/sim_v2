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
	
	if(!Yii::app()->user->isGuest && Yii::app()->user->getRole() == 'admin')
	{
		$this->widget('bootstrap.widgets.TbNavbar', array(
		'brand'=>CHtml::encode(Yii::app()->name),
		'brandUrl'=>Yii::app()->baseUrl,
		'collapse'=>true, // requires bootstrap-responsive.css
		'items'=>array(
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'type'=>'pills',
			'items'=>array(
				array('label'=>'KONFIGURACJA', 'url'=>'#', 'items'=>
				      array(
					array('label'=>'OGÓLNE'),
					array('label'=>'JEDNOSTKI', 'url'=>array('/units')),
					array('label'=>'OBIEKTY', 'url'=>array('/objects')),
					'---',
					array('label'=>'UPRAWNIENIA'),
					array('label'=>'UŻYTKOWNICY', 'url'=>array('/users')),
					),
				),
				array('label'=>'SŁOWNIKI', 'url'=>'#', 'items'=>
				      array(
					array('label'=>'OGÓLNE'),
					array('label'=>'MEDIUM', 'url'=>array('/mediums')),
					array('label'=>'DOSTAWCY', 'url'=>array('/suppliers')),
					'---',
					array('label'=>'FAKTURY'),
					array('label'=>'TYPY TARYF', 'url'=>array('/tariffsTypes')),
					array('label'=>'TARYFY', 'url'=>array('/tariffs')),
					array('label'=>'TYPY SKŁADNIKÓW TARYF', 'url'=>array('/tariffsComponentsTypes')),
					array('label'=>'SKŁADNIKI TARYF', 'url'=>array('/tariffsComponents')),
				      ),
				),
				array('label'=>'RAPORTY', 'url'=>array('/reports')),
				//array('label'=>'ZALOGUJ', 'url'=>array('/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'WYLOGUJ ('.Yii::app()->user->name.')', 'url'=>array('/logout'), 'visible'=>!Yii::app()->user->isGuest),
			),
		),
		)));
	}
	else
	{
		$this->widget('bootstrap.widgets.TbNavbar', array(
		'brand'=>CHtml::encode(Yii::app()->name),
		'brandUrl'=>Yii::app()->baseUrl,
		'collapse'=>true, // requires bootstrap-responsive.css
		'items'=>array(
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'type'=>'pills',
			'items'=>array(
				array('label'=>'PUNKTY POBORU', 'url'=>array('/collectionPoints'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'LICZNIKI', 'url'=>array('/counters'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'FAKTURY', 'url'=>array('/invoices'), 'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'ZALOGUJ', 'url'=>array('/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'WYLOGUJ ('.Yii::app()->user->name.')', 'url'=>array('/logout'), 'visible'=>!Yii::app()->user->isGuest),
			),
		),
		)));
	}
	
        ?>
	
	<?php echo $content; ?>
</div><!-- page -->

</body>
</html>

