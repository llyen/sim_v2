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
              'value'=>'$data->tariff->supplier->name',
              'filter'=>$suppliers,
        ),
        array(
              'name'=>'tariff_search',
              'value'=>'$data->tariff->name',
              'filter'=>$tariffs,
        ),
        array(
              'name'=>'medium_search',
              'value'=>'$data->medium->name',
              'filter'=>$mediums,
        ),
        'name',
        'mandatory_date',
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{tariffComponentView}{tariffComponentUpdate}',
            'buttons'=>array(
                'tariffComponentView' => array(
                    'label'=>'podgląd',
                    'url'=>'Yii::app()->createUrl(\'tariffsComponents/view\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/list.png',
                ),
                'tariffComponentUpdate' => array(
                    'label'=>'edycja',
                    'url'=>'Yii::app()->createUrl(\'tariffsComponents/update\', array(\'id\'=>$data->id))',
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