<?php

    $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped condensed',
    'dataProvider'=>$model->searchByObject(),
    'template'=>"{items}\n{pager}",
    'filter'=>$model,
    //'enablePagination'=>true,
    'columns'=>array(
        'symbol',
        array('name'=>'object_search', 'value'=>'$data->object->name'),
        'create_date',
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{cpview} {cpupdate}',
            'buttons'=>array(
                'cpview' => array(
                    'label'=>'podgląd',
                    'url'=>'Yii::app()->createUrl(\'collectionPoints/view\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/list.png',
                ),
                'cpupdate' => array(
                    'label'=>'edycja',
                    'url'=>'Yii::app()->createUrl(\'collectionPoints/update\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/update.png',
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