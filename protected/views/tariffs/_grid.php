<?php

    $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped condensed',
    'dataProvider'=>$model->search(),
    'template'=>"{items}\n{pager}",
    'filter'=>$model,
    //'enablePagination'=>true,
    'columns'=>array(
        array(
              'name'=>'supplier_search',
              'value'=>'$data->supplier->name',
              'filter'=>$suppliers,
        ),
        'name',
        'mandatory_date',
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{tariffView}{tariffUpdate}',
            'buttons'=>array(
                'tariffView' => array(
                    'label'=>'podgląd',
                    'url'=>'Yii::app()->createUrl(\'tariffs/view\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/list.png',
                ),
                'tariffUpdate' => array(
                    'label'=>'edycja',
                    'url'=>'Yii::app()->createUrl(\'tariffs/update\', array(\'id\'=>$data->id))',
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