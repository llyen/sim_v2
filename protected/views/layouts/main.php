<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Jakub Wawrzyniak [jakub.wawrzyniak@urzad.srem.pl]">
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
		'htmlOptions'=>array('class'=>'navbar-wrapper'),
		'items'=>array(
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'type'=>'pills',
			'items'=>array(
				array('label'=>'KONFIGURACJA', 'url'=>'#', 'items'=>
				      array(
					array('label'=>'PROFIL'),
					array('label'=>'ZMIEŃ HASŁO', 'url'=>array('/changePassword')),
					'---',
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
				array('label'=>'DANE', 'url'=>'#', 'items'=>
				      array(
					array('label'=>'PODGLĄD'),
					array('label'=>'PUNKTY POBORU', 'url'=>array('/collectionPoints/adminIndex')),
					array('label'=>'LICZNIKI', 'url'=>array('/counters/adminIndex')),
					array('label'=>'FAKTURY', 'url'=>array('/invoices/adminIndex')),
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
		'htmlOptions'=>array('class'=>'navbar-wrapper'),
		'items'=>array(
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'type'=>'pills',
			'items'=>array(
				array('label'=>'KONFIGURACJA', 'visible'=>!Yii::app()->user->isGuest, 'url'=>'#', 'items'=>
					array(
						array('label'=>'PROFIL'),
						array('label'=>'ZMIEŃ HASŁO', 'url'=>array('/changePassword')),
					),
				),
				array('label'=>'CO TO JEST SIM?', 'url'=>array('/site/about'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'GENEZA', 'url'=>array('/site/genesis'), 'visible'=>Yii::app()->user->isGuest),
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
<div id="footer">
	<img src="<?php echo Yii::app()->baseUrl.'/images/energetyczny_srem.png' ?>" style="width: 100px; height: 71px;">Urząd Miejski w Śremie Pl. 20 Października 1 63-100 Śrem
</div>
</body>
</html>

