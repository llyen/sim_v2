<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' :: Użytkownicy';

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
        array('label'=>'UŻYTKOWNICY'),
	array('label'=>'Wyświetl listę użytkowników', 'icon'=>'book', 'active'=>true, 'url'=>array('index')),
        array('label'=>'Dodaj użytkownika', 'icon'=>'pencil', 'url'=>array('create')),
);
?>

<div class="window">
	<legend>Użytkownicy</legend>
	<table>
		<thead>
			<th>Jednostka</th>
			<th>Użytkownik</th>
			<th>Opcje</th>
		</thead>
		<tbody>			
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			'summaryText'=>'',
			'emptyText'=>'Brak danych.',
		)); ?>
		</tbody>
	</table>
</div>