<?php

/**
 * This is the model class for table "tariffs".
 *
 * The followings are the available columns in table 'tariffs':
 * @property integer $id
 * @property integer $type_id
 * @property integer $supplier_id
 * @property string $name
 * @property string $mandatory_date
 *
 * The followings are the available model relations:
 * @property Invoices[] $invoices
 * @property TariffsTypes $type
 * @property Suppliers $supplier
 * @property TariffsComponents[] $tariffsComponents
 */
class Tariffs extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tariffs the static model class
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
		return 'tariffs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type_id, name', 'required', 'message'=>'Proszę podaj wartość dla pola {attribute}'),
			array('type_id, supplier_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255, 'message'=>'{attribute} może mieć maksymalną długość 255 znaków'),
			array('mandatory_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, type_id, supplier_id, name, mandatory_date', 'safe', 'on'=>'search'),
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
			'invoices' => array(self::HAS_MANY, 'Invoices', 'tariff_id'),
			'type' => array(self::BELONGS_TO, 'TariffsTypes', 'type_id'),
			'supplier' => array(self::BELONGS_TO, 'Suppliers', 'supplier_id'),
			'tariffsComponents' => array(self::HAS_MANY, 'TariffsComponents', 'tariff_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'type_id' => 'Typ',
			'supplier_id' => 'Dostawca',
			'name' => 'Nazwa',
			'mandatory_date' => 'Data obowiązywania',
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
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('supplier_id',$this->supplier_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('mandatory_date',$this->mandatory_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}