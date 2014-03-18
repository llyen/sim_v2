<?php

    $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped condensed',
    'dataProvider'=>$model->searchByCollectionPoint(),
    'template'=>"{items}\n{pager}",
    'filter'=>$model,
    //'enablePagination'=>true,
    'columns'=>array(
        array('name'=>'collection_point_search', 'value'=>'$data->collectionPoint->symbol'),
        array('name'=>'medium_search', 'value'=>'$data->medium->name'),
        'symbol',
        'installation_date',
        array(
            'name'=>'archival',
            'type'=>'raw',
            'value'=>'$this->grid->widget(\'bootstrap.widgets.TbLabel\', Counters::getLabel($data->archival), true);',
            'filter'=>array(0 => 'nie', 1 => 'tak'),
        ),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{cview} {cupdate} {creadings}',
            'htmlOptions'=>array('style'=>'width: 60px;'),
            'buttons'=>array(
                'cview' => array(
                    'label'=>'podgląd',
                    'url'=>'Yii::app()->createUrl(\'counters/view\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/list.png',
                ),
                'cupdate' => array(
                    'label'=>'edycja',
                    'url'=>'Yii::app()->createUrl(\'counters/update\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/update.png',
                ),
                'creadings' => array(
                    'label'=>'odczyty licznika',
                    'url'=>'Yii::app()->createUrl(\'countersReadings/\'.$data->id)',
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