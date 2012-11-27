<?php
/* @var $this OtherConnectionsController */
/* @var $model OtherConnections */

$this->breadcrumbs=array(
	'Other Connections'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OtherConnections', 'url'=>array('index')),
	array('label'=>'Manage OtherConnections', 'url'=>array('admin')),
);
?>

<h1>Create OtherConnections</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>