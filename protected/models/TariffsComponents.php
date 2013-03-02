<?php

/**
 * This is the model class for table "tariffs_components".
 *
 * The followings are the available columns in table 'tariffs_components':
 * @property integer $id
 * @property integer $tariff_id
 * @property integer $type_id
 * @property integer $medium_id
 * @property string $name
 * @property string $unit
 * @property string $mandatory_date
 * @property string $price_per_unit
 * @property integer $vat
 * @property string $multiplier
 * @property integer $archival
 *
 * The followings are the available model relations:
 * @property InvoicesData[] $invoicesDatas
 * @property Tariffs $tariff
 * @property TariffsComponentsTypes $type
 * @property Mediums $medium
 */
class TariffsComponents extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TariffsComponents the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tariffs_components';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tariff_id, type_id, medium_id, name', 'required', 'message'=>'Proszę podaj wartość dla pola {attribute}'),
			array('tariff_id, type_id, medium_id, vat, archival', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255, 'message'=>'{attribute} może mieć maksymalną długość 255 znaków'),
			array('unit, price_per_unit, multiplier', 'length', 'max'=>10, 'message'=>'{attribute} może mieć maksymalną długość 10 znaków'),
			array('mandatory_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tariff_id, type_id, medium_id, name, unit, mandatory_date, price_per_unit, vat, multiplier, archival', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'invoicesDatas' => array(self::HAS_MANY, 'InvoicesData', 'component_id'),
			'tariff' => array(self::BELONGS_TO, 'Tariffs', 'tariff_id'),
			'type' => array(self::BELONGS_TO, 'TariffsComponentsTypes', 'type_id'),
			'medium' => array(self::BELONGS_TO, 'Mediums', 'medium_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tariff_id' => 'Taryfa',
			'type_id' => 'Typ',
			'medium_id' => 'Medium',
			'name' => 'Nazwa',
			'unit' => 'Jednostka',
			'mandatory_date' => 'Data obowiązywania',
			'price_per_unit' => 'Cena za jednostkę',
			'vat' => 'Vat',
			'multiplier' => 'Mnożnik',
			'archival' => 'Czy archiwalny',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('tariff_id',$this->tariff_id);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('medium_id',$this->medium_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('unit',$this->unit,true);
		$criteria->compare('mandatory_date',$this->mandatory_date,true);
		$criteria->compare('price_per_unit',$this->price_per_unit,true);
		$criteria->compare('vat',$this->vat);
		$criteria->compare('multiplier',$this->multiplier,true);
		$criteria->compare('archival',$this->archival);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}