<?php

    $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped condensed',
    'dataProvider'=>$model->search(),
    'template'=>"{items}\n{pager}",
    'filter'=>$model,
    //'enablePagination'=>true,
    'columns'=>array(
        array('name'=>'unit_search', 'value'=>'$data->collectionPoint->object->name'),
	array('name'=>'collection_point_search', 'value'=>'$data->collectionPoint->symbol'),
        array('name'=>'medium_search', 'value'=>'$data->medium->name'),
	'symbol',
        'installation_date',
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{adminView}{adminIndex}',
            'buttons'=>array(
                'adminView' => array(
                    'label'=>'podgląd',
                    'url'=>'Yii::app()->createUrl(\'counters/adminView\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/list.png',
                ),
                'adminIndex' => array(
                    'label'=>'odczyty licznika',
                    'url'=>'Yii::app()->createUrl(\'countersReadings/adminIndex\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/table.png',
                ),
            ),
        ),
    ),
    'summaryText'=>'',
    'emptyText'=>'Brak danych.',
    'pager'=>array(
        'nextPageLabel'=>'Następna &raquo;',
        'prevPageLabel'=>'&laquo; Poprzednia',
        'header'=>'',
    ),
    'pagerCssClass'=>'pagination pagination-centered',
    ));