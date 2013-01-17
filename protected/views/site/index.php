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
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam enim vitae lorem convallis feugiat. Sed sed turpis massa, vel hendrerit ipsum. Vivamus at nisi turpis, ut vehicula nunc. Vestibulum ornare, libero sed consequat sollicitudin, leo orci aliquet odio, pellentesque fermentum augue mauris id turpis.</p>
<?php } ?>
<?php $this->endWidget(); ?>
