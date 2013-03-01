<?php
/* @var $this CollectionPointsController */
/* @var $model CollectionPoints */

$this->pageTitle=Yii::app()->name . ' :: Szczegóły punktu poboru';

$this->breadcrumbs=array(
	'Collection Points'=>array('index'),
	$model->id,
);

$this->menu=array(
        array('label'=>'PUNKTY POBORU'),
	array('label'=>'Wyświetl punkty poboru', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Utwórz punkt poboru', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Podgląd: <?php echo $model->symbol; ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'symbol',
		'multiplicand',
		'create_date',
		'create_user',
		'update_date',
		'update_user',
	),
)); ?>
