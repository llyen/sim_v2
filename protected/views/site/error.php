<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ':: Błąd aplikacji';
$this->breadcrumbs=array(
	'Error',
);
?>

<h2>Wystąpił błąd aplikacji <?php echo $code; ?></h2>

<div class="error">
<?php echo CHtml::encode($message); ?>
</div>