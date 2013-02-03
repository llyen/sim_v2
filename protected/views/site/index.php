<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
'heading'=>(Yii::app()->user->isGuest) ? Yii::app()->name : 'Witaj, '.Yii::app()->user->name,
)); ?>

<?php if(Yii::app()->user->isGuest){ ?>
<p>Dostęp do zasobów aplikacji wymaga uwierzytelnienia.</p>
<p>
<?php $this->widget('bootstrap.widgets.TbButton', array(
'type'=>'primary',
'size'=>'large',
'label'=>'Zaloguj się',
'url'=>array('site/login'),
)); ?>
</p>
<?php }else{ ?>
<p>Prezentujemy wersję rozwojową aplikacji System Informacji o Mediach. Prosimy o zgłaszanie wszelkich zauważonych błędów bezpośrednio do administratora systemu.</p>
<?php

$this->widget('bootstrap.widgets.TbButton', array(
'type'=>'primary',
'size'=>'large',
'label'=>'Zgłoś problem',
'url'=>'mailto:jakub.wawrzyniak@urzad.srem.pl?subject='.CHtml::encode('Zgłoszenie błędu - system informacji o mediach'),
));

} ?>
<?php $this->endWidget(); ?>
