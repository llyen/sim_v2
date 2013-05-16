<?php

    $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped condensed',
    'dataProvider'=>$model->search(),
    'template'=>"{items}\n{pager}",
    'filter'=>$model,
    //'enablePagination'=>true,
    'columns'=>array(
	array('name'=>'unit_search', 'value'=>'$data->object->unit->name'),
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
            'template'=>'{adminView}{adminIndex}',
            'buttons'=>array(
                'adminView' => array(
                    'label'=>'podgląd',
                    'url'=>'Yii::app()->createUrl(\'invoices/adminView\', array(\'id\'=>$data->id))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/list.png',
                ),
                'adminIndex' => array(
                    'label'=>'pozycje na fakturze',
                    'url'=>'Yii::app()->createUrl(\'invoicesData/adminIndex\', array(\'id\'=>$data->id))',
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