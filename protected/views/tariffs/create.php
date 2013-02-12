<?php
/* @var $this TariffsController */
/* @var $model Tariffs */

$this->breadcrumbs=array(
	'Tariffs'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'TARYFY'),
	array('label'=>'Wyświetl listę', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz taryfę', 'icon'=>'pencil', 'active'=>true, 'url'=>array('create')),
);
?>

<legend>Utwórz taryfę</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'suppliers'=>$suppliers, 'types'=>$types)); ?>