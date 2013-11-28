<?php

class StatementsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
            return array(
                'accessControl', // perform access control for CRUD operations
                //'postOnly + delete', // we only allow deletion via POST request
            );
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
	    return array(
		array('allow',
			'actions'=>array('objectResume','objects'), // role do bazy!!!
			'roles'=>array('admin'),
		),
		array('deny',  // deny all users
			'users'=>array('*'),
            ),
        );
	}
    
	public function actionObjects()
	{
		$model = Objects::model()->with('unit')->findAll(array('order'=>'unit.name asc, t.name asc'));
		$mpdf=new mpdf('utf-8','A4-L','','',20,20,20,20,5,0);
		$mpdf->useOnlyCoreFonts = true;    // false is default
		$mpdf->SetProtection(array('print'));
		$mpdf->SetTitle("Obiekty");
		$mpdf->SetAuthor("System Informacji o Mediach :: Urząd Miejski w Śremie");
		//$mpdf->SetDisplayMode('fullpage');

		$html = '
		<html>
		<head>
		<style type="text/css">
		h2 {
			font: bold 28px Helvetica;
		}
		h3 {
			font: normal 20px Helvetica;
		}
		table {
			background-color: rgba(0, 0, 0, 0);
			border-collapse: collapse;
			border-spacing: 0;
			max-width: 100%;
		}
		.table {
			margin-bottom: 20px;
			/*width: 100%;*/
			width: 700px;
			font: normal 13px Helvetica;
		}
		.table th, .table td {
			border-top: 1px solid #DDDDDD;
			line-height: 20px;
			padding: 8px;
			text-align: left;
			vertical-align: top;
		}
		.table th {
			font-weight: bold;
			text-align: right;
			width: 200px;
		}
		.table thead th {
			vertical-align: bottom;
		}
		.table caption + thead tr:first-child th, .table caption + thead tr:first-child td, .table colgroup + thead tr:first-child th, .table colgroup + thead tr:first-child td, .table thead:first-child tr:first-child th, .table thead:first-child tr:first-child td {
			border-top: 0 none;
		}
		.table tbody + tbody {
			border-top: 2px solid #DDDDDD;
		}
		.table-condensed th, .table-condensed td {
			padding: 4px 10px;
		}
		.table-bordered {
			-moz-border-bottom-colors: none;
			-moz-border-left-colors: none;
			-moz-border-right-colors: none;
			-moz-border-top-colors: none;
			border-collapse: separate;
			border-color: #DDDDDD #DDDDDD #DDDDDD -moz-use-text-color;
			border-image: none;
			border-radius: 4px 4px 4px 4px;
			border-style: solid solid solid none;
			border-width: 1px 1px 1px 0;
		}
		.table-bordered th, .table-bordered td {
			border-left: 1px solid #DDDDDD;
		}
		.table-bordered caption + thead tr:first-child th, .table-bordered caption + tbody tr:first-child th, .table-bordered caption + tbody tr:first-child td, .table-bordered colgroup + thead tr:first-child th, .table-bordered colgroup + tbody tr:first-child th, .table-bordered colgroup + tbody tr:first-child td, .table-bordered thead:first-child tr:first-child th, .table-bordered tbody:first-child tr:first-child th, .table-bordered tbody:first-child tr:first-child td {
			border-top: 0 none;
		}
		.table-bordered thead:first-child tr:first-child th:first-child, .table-bordered tbody:first-child tr:first-child td:first-child {
			border-top-left-radius: 4px;
		}
		.table-bordered thead:first-child tr:first-child th:last-child, .table-bordered tbody:first-child tr:first-child td:last-child {
			border-top-right-radius: 4px;
		}
		.table-bordered thead:last-child tr:last-child th:first-child, .table-bordered tbody:last-child tr:last-child td:first-child, .table-bordered tfoot:last-child tr:last-child td:first-child {
			border-radius: 0 0 0 4px;
		}
		.table-bordered thead:last-child tr:last-child th:last-child, .table-bordered tbody:last-child tr:last-child td:last-child, .table-bordered tfoot:last-child tr:last-child td:last-child {
			border-bottom-right-radius: 4px;
		}
		.table-bordered caption + thead tr:first-child th:first-child, .table-bordered caption + tbody tr:first-child td:first-child, .table-bordered colgroup + thead tr:first-child th:first-child, .table-bordered colgroup + tbody tr:first-child td:first-child {
			border-top-left-radius: 4px;
		}
		.table-bordered caption + thead tr:first-child th:last-child, .table-bordered caption + tbody tr:first-child td:last-child, .table-bordered colgroup + thead tr:first-child th:last-child, .table-bordered colgroup + tbody tr:first-child td:last-child {
			border-top-right-radius: 4px;
		}
		.table-striped tbody tr:nth-child(2n+1) td, .table-striped tbody tr:nth-child(2n+1) th {
			background-color: #F9F9F9;
		}
		.table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
			background-color: #F5F5F5;
		}
		table td[class*="span"], table th[class*="span"], .row-fluid table td[class*="span"], .row-fluid table th[class*="span"] {
			display: table-cell;
			float: none;
			margin-left: 0;
		}
		.table td.span1, .table th.span1 {
			float: none;
			margin-left: 0;
			width: 44px;
		}
		.table td.span2, .table th.span2 {
			float: none;
			margin-left: 0;
			width: 124px;
		}
		.table td.span3, .table th.span3 {
			float: none;
			margin-left: 0;
			width: 204px;
		}
		.table td.span4, .table th.span4 {
			float: none;
			margin-left: 0;
			width: 284px;
		}
		.table td.span5, .table th.span5 {
			float: none;
			margin-left: 0;
			width: 364px;
		}
		.table td.span6, .table th.span6 {
			float: none;
			margin-left: 0;
			width: 444px;
		}
		.table td.span7, .table th.span7 {
			float: none;
			margin-left: 0;
			width: 524px;
		}
		.table td.span8, .table th.span8 {
			float: none;
			margin-left: 0;
			width: 604px;
		}
		.table td.span9, .table th.span9 {
			float: none;
			margin-left: 0;
			width: 684px;
		}
		.table td.span10, .table th.span10 {
			float: none;
			margin-left: 0;
			width: 764px;
		}
		.table td.span11, .table th.span11 {
			float: none;
			margin-left: 0;
			width: 844px;
		}
		.table td.span12, .table th.span12 {
			float: none;
			margin-left: 0;
			width: 924px;
		}
		.table tbody tr.success td {
			background-color: #DFF0D8;
		}
		.table tbody tr.error td {
			background-color: #F2DEDE;
		}
		.table tbody tr.warning td {
			background-color: #FCF8E3;
		}
		.table tbody tr.info td {
			background-color: #D9EDF7;
		}
		.table-hover tbody tr.success:hover td {
			background-color: #D0E9C6;
		}
		.table-hover tbody tr.error:hover td {
			background-color: #EBCCCC;
		}
		.table-hover tbody tr.warning:hover td {
			background-color: #FAF2CC;
		}
		.table-hover tbody tr.info:hover td {
			background-color: #C4E3F3;
		}
			
		</style>
		</head>
		<body>

		<!--mpdf
		<htmlpageheader name="docheader">
		<div style="font-size: 9pt; text-align: right; padding-top: 3mm; ">
				{PAGENO}/{nb}
		</div>
		</htmlpageheader>

		<htmlpagefooter name="docfooter">
		<div style="height: 71px; width: 100px; margin: 0 auto;">
				<img src="'.Yii::app()->baseUrl.'/images/energetyczny_srem.png'.'" />
		</div>
		</htmlpagefooter>
		
		<sethtmlpageheader name="docheader" value="on" show-this-page="1" />
		<sethtmlpagefooter name="docfooter" value="on" />
		mpdf-->

		<h2>Zestawienie obiektów</h2>
		<table id="yw0" class="detail-view table table-striped table-condensed"><tbody><tr><th style="text-align: center;">Jednostka</th><th style="text-align: center;">Nazwa</th><th style="text-align: center;">Adres</th><th style="text-align: center;">Numer działki</th><th style="text-align: center;">Powierzchnia</th><th style="text-align: center;">Kubatura</th><th style="text-align: center;">Dodatkowe informacje</th></tr>';
		
		foreach($model as $object)
		{
				$html .= '<tr><td style="text-align: center;">'.$object->unit->name.'</td><td style="text-align: center;">'.$object->name.'</td><td style="text-align: center;">'.$object->address.'</td><td style="text-align: center;">'.$object->plot_number.'</td><td style="text-align: center;">'.$object->area.' m<sup>2</sup></td><td style="text-align: center;">'.$object->cubage.' m<sup>3</sup></td><td style="text-align: center;">'.$object->additional_information.'</td></tr>';
		}
		
		$html .= '</tbody></table></body></html>';

		$mpdf->WriteHTML($html);
		$mpdf->Output('obiekty.pdf', 'I');
		exit;
	}
	
    public function actionObjectResume()
    {
		$model = new StatementsObjectForm();
		$objectsModel = Objects::model()->with('unit')->findAll(array('order'=>'unit.name asc, t.name asc'));
		$objects = array();
		foreach($objectsModel as $o)
				$objects[$o->id] = $o->unit->name.' ('.$o->name.')';
		//if(Yii::app()->user->id)
		//{
			if(isset($_POST['ajax']) && $_POST['ajax']==='statementsobject-form')
			{
				echo CActiveForm::validate($model);
				Yii::app()->end();
			}
			
			if(isset($_POST['StatementsObjectForm']))
			{
				$model->attributes=$_POST['StatementsObjectForm'];
				if($model->validate())
				{
						//$user = Users::model()->findByAttributes(array('username'=>Yii::app()->user->id));
						//$user->password = $model->newPassword;
						//$user->save();
						//$this->redirect(array($this->redirect(Yii::app()->baseUrl)));
						$object = Objects::model()->findByPk($model->object_id);
						$mpdf=new mpdf('utf-8','A4','','',20,20,20,20,5,0);
						$mpdf->useOnlyCoreFonts = true;    // false is default
						$mpdf->SetProtection(array('print'));
						$mpdf->SetTitle("Karta obiektu");
						$mpdf->SetAuthor("System Informacji o Mediach :: Urząd Miejski w Śremie");
						//$mpdf->SetDisplayMode('fullpage');

						$html = '
						<html>
						<head>
						<style type="text/css">
						h2 {
						    font: bold 28px Helvetica;
						}
						h3 {
						    font: normal 20px Helvetica;
						}
						table {
						    background-color: rgba(0, 0, 0, 0);
						    border-collapse: collapse;
						    border-spacing: 0;
						    max-width: 100%;
						}
						.table {
						    margin-bottom: 20px;
						    /*width: 100%;*/
						    width: 700px;
						    font: normal 13px Helvetica;
						}
						.table th, .table td {
						    border-top: 1px solid #DDDDDD;
						    line-height: 20px;
						    padding: 8px;
						    text-align: left;
						    vertical-align: top;
						}
						.table th {
						    font-weight: bold;
						    text-align: right;
						    width: 200px;
						}
						.table thead th {
						    vertical-align: bottom;
						}
						.table caption + thead tr:first-child th, .table caption + thead tr:first-child td, .table colgroup + thead tr:first-child th, .table colgroup + thead tr:first-child td, .table thead:first-child tr:first-child th, .table thead:first-child tr:first-child td {
						    border-top: 0 none;
						}
						.table tbody + tbody {
						    border-top: 2px solid #DDDDDD;
						}
						.table-condensed th, .table-condensed td {
						    padding: 4px 10px;
						}
						.table-bordered {
						    -moz-border-bottom-colors: none;
						    -moz-border-left-colors: none;
						    -moz-border-right-colors: none;
						    -moz-border-top-colors: none;
						    border-collapse: separate;
						    border-color: #DDDDDD #DDDDDD #DDDDDD -moz-use-text-color;
						    border-image: none;
						    border-radius: 4px 4px 4px 4px;
						    border-style: solid solid solid none;
						    border-width: 1px 1px 1px 0;
						}
						.table-bordered th, .table-bordered td {
						    border-left: 1px solid #DDDDDD;
						}
						.table-bordered caption + thead tr:first-child th, .table-bordered caption + tbody tr:first-child th, .table-bordered caption + tbody tr:first-child td, .table-bordered colgroup + thead tr:first-child th, .table-bordered colgroup + tbody tr:first-child th, .table-bordered colgroup + tbody tr:first-child td, .table-bordered thead:first-child tr:first-child th, .table-bordered tbody:first-child tr:first-child th, .table-bordered tbody:first-child tr:first-child td {
						    border-top: 0 none;
						}
						.table-bordered thead:first-child tr:first-child th:first-child, .table-bordered tbody:first-child tr:first-child td:first-child {
						    border-top-left-radius: 4px;
						}
						.table-bordered thead:first-child tr:first-child th:last-child, .table-bordered tbody:first-child tr:first-child td:last-child {
						    border-top-right-radius: 4px;
						}
						.table-bordered thead:last-child tr:last-child th:first-child, .table-bordered tbody:last-child tr:last-child td:first-child, .table-bordered tfoot:last-child tr:last-child td:first-child {
						    border-radius: 0 0 0 4px;
						}
						.table-bordered thead:last-child tr:last-child th:last-child, .table-bordered tbody:last-child tr:last-child td:last-child, .table-bordered tfoot:last-child tr:last-child td:last-child {
						    border-bottom-right-radius: 4px;
						}
						.table-bordered caption + thead tr:first-child th:first-child, .table-bordered caption + tbody tr:first-child td:first-child, .table-bordered colgroup + thead tr:first-child th:first-child, .table-bordered colgroup + tbody tr:first-child td:first-child {
						    border-top-left-radius: 4px;
						}
						.table-bordered caption + thead tr:first-child th:last-child, .table-bordered caption + tbody tr:first-child td:last-child, .table-bordered colgroup + thead tr:first-child th:last-child, .table-bordered colgroup + tbody tr:first-child td:last-child {
						    border-top-right-radius: 4px;
						}
						.table-striped tbody tr:nth-child(2n+1) td, .table-striped tbody tr:nth-child(2n+1) th {
						    background-color: #F9F9F9;
						}
						.table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
						    background-color: #F5F5F5;
						}
						table td[class*="span"], table th[class*="span"], .row-fluid table td[class*="span"], .row-fluid table th[class*="span"] {
						    display: table-cell;
						    float: none;
						    margin-left: 0;
						}
						.table td.span1, .table th.span1 {
						    float: none;
						    margin-left: 0;
						    width: 44px;
						}
						.table td.span2, .table th.span2 {
						    float: none;
						    margin-left: 0;
						    width: 124px;
						}
						.table td.span3, .table th.span3 {
						    float: none;
						    margin-left: 0;
						    width: 204px;
						}
						.table td.span4, .table th.span4 {
						    float: none;
						    margin-left: 0;
						    width: 284px;
						}
						.table td.span5, .table th.span5 {
						    float: none;
						    margin-left: 0;
						    width: 364px;
						}
						.table td.span6, .table th.span6 {
						    float: none;
						    margin-left: 0;
						    width: 444px;
						}
						.table td.span7, .table th.span7 {
							float: none;
							margin-left: 0;
							width: 524px;
						}
						.table td.span8, .table th.span8 {
						    float: none;
						    margin-left: 0;
						    width: 604px;
						}
						.table td.span9, .table th.span9 {
						    float: none;
						    margin-left: 0;
						    width: 684px;
						}
						.table td.span10, .table th.span10 {
						    float: none;
						    margin-left: 0;
						    width: 764px;
						}
						.table td.span11, .table th.span11 {
						    float: none;
						    margin-left: 0;
						    width: 844px;
						}
						.table td.span12, .table th.span12 {
						    float: none;
						    margin-left: 0;
						    width: 924px;
						}
						.table tbody tr.success td {
						    background-color: #DFF0D8;
						}
						.table tbody tr.error td {
						    background-color: #F2DEDE;
						}
						.table tbody tr.warning td {
						    background-color: #FCF8E3;
						}
						.table tbody tr.info td {
						    background-color: #D9EDF7;
						}
						.table-hover tbody tr.success:hover td {
						    background-color: #D0E9C6;
						}
						.table-hover tbody tr.error:hover td {
						    background-color: #EBCCCC;
						}
						.table-hover tbody tr.warning:hover td {
						    background-color: #FAF2CC;
						}
						.table-hover tbody tr.info:hover td {
						    background-color: #C4E3F3;
						}
						    
						</style>
						</head>
						<body>
		
						<!--mpdf
						<htmlpageheader name="docheader">
						<div style="font-size: 9pt; text-align: right; padding-top: 3mm; ">
								{PAGENO}/{nb}
						</div>
						</htmlpageheader>

						<htmlpagefooter name="docfooter">
						<div style="height: 71px; width: 100px; margin: 0 auto;">
								<img src="'.Yii::app()->baseUrl.'/images/energetyczny_srem.png'.'" />
						</div>
						</htmlpagefooter>
						
						<sethtmlpageheader name="docheader" value="on" show-this-page="1" />
						<sethtmlpagefooter name="docfooter" value="on" />
						mpdf-->

						<h2>Karta obiektu</h2>
						<h3>Charakterystyka</h3>
						<table id="yw0" class="detail-view table table-striped table-condensed"><tbody><tr class="odd"><th>Jednostka</th><td>'.$object->unit->name.'</td></tr>
						<tr class="even"><th>Nazwa</th><td>'.$object->name.'</td></tr>
						<tr class="odd"><th>Adres</th><td>'.$object->address.'</td></tr>
						<tr class="even"><th>Numer działki</th><td>'.$object->plot_number.'</td></tr>
						<!--<tr class="odd"><th>Świadectwo energetyczne</th><td>($object->energy_certificate != "") ? "Plik prawidłowo powiązany." : "Brak powiązanego pliku." </td></tr>-->
						<tr class="even"><th>Powierzchnia</th><td>'.$object->area.' m<sup>2</sup></td></tr>
						<tr class="odd"><th>Kubatura</th><td>'.$object->cubage.' m<sup>3</sup></td></tr>
						<tr class="even"><th>Dodatkowe informacje</th><td>'.$object->additional_information.'</td></tr>
						</tbody></table>';
						
						if($object->collectionPoints != null)
						{
								$html .= '<h3>Punkty poboru</h3>
								<table class="grid-view table table-striped table-condensed"><tbody><tr class="even"><th style="text-align: center;">Symbol</th><th	style="text-align: center;">Data utworzenia</th></tr>';
								foreach($object->collectionPoints as $cp)
								{
								    $html .= '<tr><td style="text-align: center;">'.$cp->symbol.'</td><td style="text-align: center;">'.$cp->create_date.'</td></tr>';
								}
								$html .= '</tbody></table>';		
						}
						
						$html .= '</body></html>';

						$mpdf->WriteHTML($html);
						$mpdf->Output('karta_obiektu.pdf', 'I');
						exit;
				}
			}
			$this->render('objectResume', array('model'=>$model,'objects'=>$objects));
		//}
    }
}