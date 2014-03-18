<?php

    $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped condensed',
    'dataProvider'=>$model->searchByObject(),
    'template'=>"{items}\n{pager}",
    'filter'=>$model,
    //'enablePagination'=>true,
    'columns'=>array(
        array(
            'name'=>'status',
            'type'=>'raw',
            'value'=>'$this->grid->widget(\'bootstrap.widgets.TbLabel\', Invoices::getLabel($data->status), true);',
            'filter'=>array(0 => 'nowa', 1 => 'zatwierdzona', 2 => 'odrzucona'),
            ),
        array('name'=>'object_search', 'value'=>'$data->object->name'),
        array('name'=>'supplier_search', 'value'=>'$data->supplier->name'),
        'period_since',
        'period_to',
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{iview} {iupdate} {idelete} {idata}',
            'htmlOptions'=>array('style'=>'width: 80px;'),
            'buttons'=>array(
                'iview' => array(
                    'label'=>'podgląd',
                    'url'=>'Yii::app()->createUrl(\'invoices/view\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/list.png',
                ),
                'iupdate' => array(
                    'label'=>'edycja',
                    'url'=>'Yii::app()->createUrl(\'invoices/update\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/update.png',
                    'visible'=>'$data->status!=1',
                ),
                'idelete' => array(
                    'label'=>'usuwanie',
                    'url'=>'Yii::app()->createUrl(\'invoices/delete\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/delete.png',
                    'visible'=>'$data->status!=1',
                ),
                'idata' => array(
                    'label'=>'pozycje na fakturze',
                    'url'=>'Yii::app()->createUrl(\'invoicesData/\'.$data->id)',
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