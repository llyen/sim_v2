<?php
/* @var $this UsersController */
/* @var $model Users */

$this->pageTitle=Yii::app()->name . ' :: Szczegóły użytkownika';

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
        array('label'=>'UŻYTKOWNICY'),
	array('label'=>'Wyświetl listę użytkowników', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Dodaj użytkownika', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Szczegóły użytkownika</legend>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
		      'name'=>'unit.name',
		      'label'=>'Jednostka',
		      'type'=>'raw',
		      'value'=>(is_null($model->unit_id)) ? '<p style="font-style: italic; margin: 0px;">uprawnienia administracyjne</p>' : $model->unit->name,
		),
		'username',
	),
)); ?>
