<?php

/**
 * This is the model class for table "counters".
 *
 * The followings are the available columns in table 'counters':
 * @property integer $id
 * @property integer $collection_point_id
 * @property integer $medium_id
 * @property string $symbol
 * @property string $unit
 * @property string $initial_state
 * @property string $installation_date
 * @property integer $archival
 * @property string $create_date
 * @property string $create_user
 * @property string $update_date
 * @property string $update_user
 *
 * The followings are the available model relations:
 * @property CollectionPoints $collectionPoint
 * @property Mediums $medium
 * @property CountersReadings[] $countersReadings
 */
class Counters extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Counters the static model class
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
		return 'counters';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('collection_point_id, medium_id, symbol, unit, create_date, create_user, update_date, update_user', 'required'),
			array('collection_point_id, medium_id, archival', 'numerical', 'integerOnly'=>true),
			array('symbol', 'length', 'max'=>255),
			array('unit, initial_state', 'length', 'max'=>10),
			array('create_user, update_user', 'length', 'max'=>100),
			array('installation_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, collection_point_id, medium_id, symbol, unit, initial_state, installation_date, archival, create_date, create_user, update_date, update_user', 'safe', 'on'=>'search'),
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
			'collectionPoint' => array(self::BELONGS_TO, 'CollectionPoints', 'collection_point_id'),
			'medium' => array(self::BELONGS_TO, 'Mediums', 'medium_id'),
			'countersReadings' => array(self::HAS_MANY, 'CountersReadings', 'counter_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'collection_point_id' => 'Collection Point',
			'medium_id' => 'Medium',
			'symbol' => 'Symbol',
			'unit' => 'Unit',
			'initial_state' => 'Initial State',
			'installation_date' => 'Installation Date',
			'archival' => 'Archival',
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
		$criteria->compare('collection_point_id',$this->collection_point_id);
		$criteria->compare('medium_id',$this->medium_id);
		$criteria->compare('symbol',$this->symbol,true);
		$criteria->compare('unit',$this->unit,true);
		$criteria->compare('initial_state',$this->initial_state,true);
		$criteria->compare('installation_date',$this->installation_date,true);
		$criteria->compare('archival',$this->archival);
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
		$this->update_date=new CDbExpression("NOW()");
		$this->update_user=Yii::app()->user->name;
		if($this->isNewRecord){
			$this->create_user=Yii::app()->user->name;
			$this->create_date=new CDbExpression("DATE_FORMAT(NOW(), '%Y-%m-%d')");
		}

		return parent::beforeValidate();	
	}
}