<?php
/* @var $this TariffsComponentsTypesController */
/* @var $model TariffsComponentsTypes */

$this->pageTitle=Yii::app()->name . ' :: Utwórz typ składnika';

$this->breadcrumbs=array(
	'Tariffs Components Types'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'TYPY SKŁADNIKÓW TARYF'),
	array('label'=>'Wyświetl listę typów', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz typ składnika', 'icon'=>'pencil', 'active'=>true, 'url'=>array('create')),
);
?>

<legend>Utwórz typ składnika</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>