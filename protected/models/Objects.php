<?php

/**
 * This is the model class for table "objects".
 *
 * The followings are the available columns in table 'objects':
 * @property integer $id
 * @property integer $unit_id
 * @property string $name
 * @property string $address
 * @property string $plot_number
 * @property string $energy_certificate
 * @property string $area
 * @property string $cubage
 * @property string $additional_information
 *
 * The followings are the available model relations:
 * @property CollectionPoints[] $collectionPoints
 * @property Invoices[] $invoices
 * @property Units $unit
 */
class Objects extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Objects the static model class
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
		return 'objects';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, address', 'required'),
			array('unit_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('area, cubage', 'length', 'max'=>10),
			array('address, plot_number, energy_certificate', 'length', 'max'=>255),
			array('energy_certificate', 'file', 'types'=>'pdf, doc', 'allowEmpty'=>true),
			array('additional_information', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, unit_id, name, address, plot_number, energy_certificate, area, cubage, additional_information', 'safe', 'on'=>'search'),
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
			'collectionPoints' => array(self::HAS_MANY, 'CollectionPoints', 'object_id'),
			'invoices' => array(self::HAS_MANY, 'Invoices', 'object_id'),
			'unit' => array(self::BELONGS_TO, 'Units', 'unit_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'unit_id' => 'Jednostka',
			'name' => 'Nazwa',
			'address' => 'Adres',
			'plot_number' => 'Numer działki',
			'energy_certificate' => 'Świadectwo energetyczne',
			'area' => 'Powierzchnia',
			'cubage' => 'Kubatura',
			'additional_information' => 'Dodatkowe informacje',
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
		$criteria->compare('unit_id',$this->unit_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('plot_number',$this->plot_number,true);
		$criteria->compare('energy_certificate',$this->energy_certificate,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('cubage',$this->cubage,true);
		$criteria->compare('additional_information',$this->additional_information,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}