<?php
/* @var $this CountersReadingsController */
/* @var $model CountersReadings */

$this->breadcrumbs=array(
	'Counters Readings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
        array('label'=>'ODCZYTY LICZNIKA'),
	array('label'=>'Powrót', 'icon'=>'chevron-left', 'url'=>array('/counters')),
	array('label'=>'Wyświetl odczyty', 'icon'=>'book', 'url'=>array("countersreadings/$cid")),
        array('label'=>'Dodaj odczyt', 'icon'=>'pencil', 'url'=>array("countersreadings/create/$cid")),
);
?>

<legend>Edytuj odczyt licznika <?php echo $model->counter->symbol; ?></legend>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'cid'=>$cid)); ?>