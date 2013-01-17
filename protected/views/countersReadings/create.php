<?php
/* @var $this CountersReadingsController */
/* @var $model CountersReadings */

$this->breadcrumbs=array(
	'Counters Readings'=>array('index'),
	'Create',
);

$this->menu=array(
        array('label'=>'ODCZYTY LICZNIKA'),
	array('label'=>'Powrót', 'icon'=>'chevron-left', 'url'=>array('/counters')),
	array('label'=>'Wyświetl odczyty', 'icon'=>'book', 'url'=>array("countersreadings/$cid")),
        array('label'=>'Dodaj odczyt', 'icon'=>'pencil', 'active'=>true, 'url'=>"$cid"),
);
?>

<legend>Utwórz odczyt licznika</legend>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'cid'=>$cid)); ?>