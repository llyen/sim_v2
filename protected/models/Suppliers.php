<?php

/**
 * This is the model class for table "suppliers".
 *
 * The followings are the available columns in table 'suppliers':
 * @property integer $id
 * @property integer $medium_id
 * @property string $name
 * @property string $address
 *
 * The followings are the available model relations:
 * @property Invoices[] $invoices
 * @property Mediums $medium
 * @property Tariffs[] $tariffs
 */
class Suppliers extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Suppliers the static model class
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
		return 'suppliers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('medium_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>150, 'message'=>'{attribute} może mieć maksymalną długość 150 znaków'),
			array('address', 'length', 'max'=>255, 'message'=>'{attribute} może mieć maksymalną długość 255 znaków'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, medium_id, name, address', 'safe', 'on'=>'search'),
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
			'invoices' => array(self::HAS_MANY, 'Invoices', 'supplier_id'),
			'medium' => array(self::BELONGS_TO, 'Mediums', 'medium_id'),
			'tariffs' => array(self::HAS_MANY, 'Tariffs', 'supplier_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'medium_id' => 'Medium',
			'name' => 'Nazwa',
			'address' => 'Adres',
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
		$criteria->compare('medium_id',$this->medium_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}