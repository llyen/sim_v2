<?php
/* @var $this TariffsComponentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tariffs Components',
);

$this->menu=array(
	array('label'=>'Create TariffsComponents', 'url'=>array('create')),
	array('label'=>'Manage TariffsComponents', 'url'=>array('admin')),
);
?>

<h1>Tariffs Components</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
