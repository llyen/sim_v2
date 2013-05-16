<?php

    $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped condensed',
    'dataProvider'=>$model->search(),
    'template'=>"{items}\n{pager}",
    'filter'=>$model,
    //'enablePagination'=>true,
    'columns'=>array(
        array('name'=>'unit_search', 'value'=>'$data->object->unit->name'),
	'symbol',
        array('name'=>'object_search', 'value'=>'$data->object->name'),
        'create_date',
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{adminView}',
            'buttons'=>array(
                'adminView' => array(
                    'label'=>'podgląd',
                    'url'=>'Yii::app()->createUrl(\'collectionPoints/adminView\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/list.png',
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