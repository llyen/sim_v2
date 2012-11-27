<?php
/* @var $this InvoicesDataController */
/* @var $model InvoicesData */

$this->breadcrumbs=array(
	'Invoices Datas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List InvoicesData', 'url'=>array('index')),
	array('label'=>'Create InvoicesData', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('invoices-data-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Invoices Datas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'invoices-data-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'invoice_id',
		'component_id',
		'value',
		'create_date',
		'create_user',
		/*
		'update_date',
		'update_user',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
