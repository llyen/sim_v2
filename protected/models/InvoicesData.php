<?php

/**
 * This is the model class for table "invoices_data".
 *
 * The followings are the available columns in table 'invoices_data':
 * @property integer $id
 * @property integer $invoice_id
 * @property integer $component_id
 * @property string $value
 * @property string $create_date
 * @property string $create_user
 * @property string $update_date
 * @property string $update_user
 *
 * The followings are the available model relations:
 * @property Invoices $invoice
 * @property TariffsComponents $component
 */
class InvoicesData extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InvoicesData the static model class
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
		return 'invoices_data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('invoice_id, component_id, create_date, create_user, update_date, update_user', 'required', 'message'=>'Proszę podaj wartość dla pola {attribute}'),
			array('invoice_id, component_id', 'numerical', 'integerOnly'=>true),
			array('value', 'length', 'max'=>10, 'message'=>'{attribute} może mieć maksymalną długość 10 znaków'),
			array('create_user, update_user', 'length', 'max'=>100, 'message'=>'{attribute} może mieć maksymalną długość 100 znaków'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, invoice_id, component_id, value, create_date, create_user, update_date, update_user', 'safe', 'on'=>'search'),
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
			'invoice' => array(self::BELONGS_TO, 'Invoices', 'invoice_id'),
			'component' => array(self::BELONGS_TO, 'TariffsComponents', 'component_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'invoice_id' => 'Faktura',
			'component_id' => 'Składnik',
			'value' => 'Wartość',
			'create_date' => 'Data utworzenia',
			'create_user' => 'Utworzona przez',
			'update_date' => 'Data aktualizacji',
			'update_user' => 'Aktualizowana przez',
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
		$criteria->compare('invoice_id',$this->invoice_id);
		$criteria->compare('component_id',$this->component_id);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_user',$this->create_user,true);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('update_user',$this->update_user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function beforeValidate()
	{
		$this->value=str_replace(',', '.', $this->value);
		$this->update_date=new CDbExpression("NOW()");
		$this->update_user=Yii::app()->user->name;
		if($this->isNewRecord){
			$this->create_user=Yii::app()->user->name;
			$this->create_date=new CDbExpression("DATE_FORMAT(NOW(), '%Y-%m-%d')");
		}

		return parent::beforeValidate();	
	}
}