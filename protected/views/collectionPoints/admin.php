<?php
/* @var $this CollectionPointsController */
/* @var $model CollectionPoints */

$this->breadcrumbs=array(
	'Collection Points'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CollectionPoints', 'url'=>array('index')),
	array('label'=>'Create CollectionPoints', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('collection-points-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Collection Points</h1>

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
	'id'=>'collection-points-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'object_id',
		'symbol',
		'multiplicand',
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
