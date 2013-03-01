<?php
/* @var $this UsersController */
/* @var $model Users */

$this->pageTitle=Yii::app()->name . ' :: Utwórz użytkownika';

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'UŻYTKOWNICY'),
	array('label'=>'Wyświetl listę użytkowników', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Dodaj użytkownika', 'icon'=>'pencil', 'active'=>true, 'url'=>array('create')),
);
?>

<legend>Dodaj użytkownika</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model,'units'=>$units)); ?>