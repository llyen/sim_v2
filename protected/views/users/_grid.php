<?php

    $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped condensed',
    'dataProvider'=>$model->search(),
    'template'=>"{items}\n{pager}",
    'filter'=>$model,
    //'enablePagination'=>true,
    'columns'=>array(
         array(
            'name'=>'unit_search',
            'type'=>'raw',
            'value'=>'($data->unit_id != NULL) ? $data->unit->name : \'<p style="font-style: italic;">uprawnienia administracyjne</p>\';',
            ),
        'username',
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{userView}{userUpdate}',
            'buttons'=>array(
                'userView' => array(
                    'label'=>'podgląd',
                    'url'=>'Yii::app()->createUrl(\'users/view\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/list.png',
                ),
                'userUpdate' => array(
                    'label'=>'edycja',
                    'url'=>'Yii::app()->createUrl(\'users/update\', array(\'id\'=>$data->id))',
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