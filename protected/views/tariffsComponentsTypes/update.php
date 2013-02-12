<?php
/* @var $this TariffsComponentsTypesController */
/* @var $model TariffsComponentsTypes */

$this->breadcrumbs=array(
	'Tariffs Components Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
        array('label'=>'TYPY SKŁADNIKÓW TARYF'),
	array('label'=>'Wyświetl listę typów', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz typ składnika', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Edytuj typ składnika</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>