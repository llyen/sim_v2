<?php

    $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped condensed',
    'dataProvider'=>$model->search(),
    'template'=>"{items}\n{pager}",
    'filter'=>$model,
    //'enablePagination'=>true,
    'columns'=>array(
        array(
            'name'=>'medium_search',
            'value'=>'$data->medium->name',
            'filter'=>$mediums,
        ),
        'name',
        'address',
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{supplierView}{supplierUpdate}',
            'buttons'=>array(
                'supplierView' => array(
                    'label'=>'podgląd',
                    'url'=>'Yii::app()->createUrl(\'suppliers/view\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/list.png',
                ),
                'supplierUpdate' => array(
                    'label'=>'edycja',
                    'url'=>'Yii::app()->createUrl(\'suppliers/update\', array(\'id\'=>$data->id))',
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