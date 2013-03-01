<?php
/* @var $this TariffsTypesController */
/* @var $model TariffsTypes */

$this->pageTitle=Yii::app()->name . ' :: Edytuj typ taryfy';

$this->breadcrumbs=array(
	'Tariffs Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
        array('label'=>'TYPY TARYF'),
	array('label'=>'Wyświetl listę typów', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz typ taryfy', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Edytuj typ taryfy</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>