<?php
/* @var $this OtherConnectionsController */
/* @var $model OtherConnections */

$this->breadcrumbs=array(
	'Other Connections'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OtherConnections', 'url'=>array('index')),
	array('label'=>'Create OtherConnections', 'url'=>array('create')),
	array('label'=>'View OtherConnections', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OtherConnections', 'url'=>array('admin')),
);
?>

<h1>Update OtherConnections <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>