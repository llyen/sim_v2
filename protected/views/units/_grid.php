<?php

    $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped condensed',
    'dataProvider'=>$model->search(),
    'template'=>"{items}\n{pager}",
    'filter'=>$model,
    //'enablePagination'=>true,
    'columns'=>array(
        'name',
        'address',
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{unitView}{unitUpdate}',
            'buttons'=>array(
                'unitView' => array(
                    'label'=>'podgląd',
                    'url'=>'Yii::app()->createUrl(\'units/view\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/list.png',
                ),
                'unitUpdate' => array(
                    'label'=>'edycja',
                    'url'=>'Yii::app()->createUrl(\'units/update\', array(\'id\'=>$data->id))',
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