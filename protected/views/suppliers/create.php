<?php
/* @var $this SuppliersController */
/* @var $model Suppliers */

$this->breadcrumbs=array(
	'Suppliers'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'DOSTAWCY'),
	array('label'=>'Wyświetl listę dostawców', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz dostawcę', 'icon'=>'pencil', 'active'=>true, 'url'=>array('create')),
);
?>

<legend>Utwórz dostawcę</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'mediums'=>$mediums)); ?>