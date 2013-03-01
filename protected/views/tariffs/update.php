<?php
/* @var $this TariffsController */
/* @var $model Tariffs */

$this->pageTitle=Yii::app()->name . ' :: Edytuj taryfę';

$this->breadcrumbs=array(
	'Tariffs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
        array('label'=>'TARYFY'),
	array('label'=>'Wyświetl listę', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz taryfę', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Edytuj taryfę</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'suppliers'=>$suppliers, 'types'=>$types)); ?>