<?php
/* @var $this UsersController */
/* @var $model Users */

$this->pageTitle=Yii::app()->name . ' :: Edytuj użytkownika';

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
        array('label'=>'UŻYTKOWNICY'),
	array('label'=>'Wyświetl listę użytkowników', 'icon'=>'book', 'url'=>array('index')),
        array('label'=>'Dodaj użytkownika', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<legend>Edytuj użytkownika</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model,'units'=>$units)); ?>