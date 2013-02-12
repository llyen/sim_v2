<?php
/* @var $this TariffsTypesController */
/* @var $model TariffsTypes */

$this->breadcrumbs=array(
	'Tariffs Types'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'TYPY TARYF'),
	array('label'=>'Wyświetl listę typów', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz typ taryfy', 'icon'=>'pencil', 'active'=>true, 'url'=>array('create')),
);
?>

<legend>Utwórz typ taryfy</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>