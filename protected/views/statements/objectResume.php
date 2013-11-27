<?php
/* @var $this StatementsController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Karta obiektu';

$this->breadcrumbs=array(
	'Statements',
);

$this->menu=array(
    array('label'=>'ZESTAWIENIA'),
	array('label'=>'Karta obiektu', 'icon'=>'book', 'active'=>true, 'url'=>array('objects')),
);
?>

<legend>Karta obiektu</legend>
<?php echo $this->renderPartial('_form_objectResume', array('model'=>$model, 'objects'=>$objects)); ?>