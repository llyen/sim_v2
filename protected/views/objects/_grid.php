<?php

    $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped condensed',
    'dataProvider'=>$model->search(),
    'template'=>"{items}\n{pager}",
    'filter'=>$model,
    //'enablePagination'=>true,
    'columns'=>array(
        array('name'=>'unit_search', 'value'=>'$data->unit->name'),
        'name',
        'address',
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{objectView}{objectUpdate}{objectDelete}',
            'buttons'=>array(
                'objectView' => array(
                    'label'=>'podgląd',
                    'url'=>'Yii::app()->createUrl(\'objects/view\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/list.png',
                ),
                'objectUpdate' => array(
                    'label'=>'edycja',
                    'url'=>'Yii::app()->createUrl(\'objects/update\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/update.png',
                ),
                'objectDelete' => array(
                    'label'=>'usuwanie',
                    'url'=>'Yii::app()->createUrl(\'objects/delete\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/delete.png',
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