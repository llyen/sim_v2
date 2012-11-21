<?php

/**
 * This is the model class for table "invoices".
 *
 * The followings are the available columns in table 'invoices':
 * @property integer $id
 * @property integer $tariff_id
 * @property integer $object_id
 * @property integer $supplier_id
 * @property string $period_since
 * @property string $period_to
 * @property string $issue_date
 * @property string $create_date
 * @property string $create_user
 * @property string $update_date
 * @property string $update_user
 *
 * The followings are the available model relations:
 * @property Tariffs $tariff
 * @property Objects $object
 * @property Suppliers $supplier
 * @property InvoicesData[] $invoicesDatas
 */
class Invoices extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Invoices the static model class
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
		return 'invoices';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tariff_id, object_id, supplier_id, create_date, create_user, update_date, update_user', 'required'),
			array('tariff_id, object_id, supplier_id', 'numerical', 'integerOnly'=>true),
			array('create_user, update_user', 'length', 'max'=>100),
			array('period_since, period_to, issue_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tariff_id, object_id, supplier_id, period_since, period_to, issue_date, create_date, create_user, update_date, update_user', 'safe', 'on'=>'search'),
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
			'tariff' => array(self::BELONGS_TO, 'Tariffs', 'tariff_id'),
			'object' => array(self::BELONGS_TO, 'Objects', 'object_id'),
			'supplier' => array(self::BELONGS_TO, 'Suppliers', 'supplier_id'),
			'invoicesDatas' => array(self::HAS_MANY, 'InvoicesData', 'invoice_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tariff_id' => 'Tariff',
			'object_id' => 'Object',
			'supplier_id' => 'Supplier',
			'period_since' => 'Period Since',
			'period_to' => 'Period To',
			'issue_date' => 'Issue Date',
			'create_date' => 'Create Date',
			'create_user' => 'Create User',
			'update_date' => 'Update Date',
			'update_user' => 'Update User',
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
		$criteria->compare('object_id',$this->object_id);
		$criteria->compare('supplier_id',$this->supplier_id);
		$criteria->compare('period_since',$this->period_since,true);
		$criteria->compare('period_to',$this->period_to,true);
		$criteria->compare('issue_date',$this->issue_date,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_user',$this->create_user,true);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('update_user',$this->update_user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}