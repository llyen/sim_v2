<?php

/**
 * This is the model class for table "counters_readings".
 *
 * The followings are the available columns in table 'counters_readings':
 * @property integer $id
 * @property integer $counter_id
 * @property string $reading_date
 * @property string $counter_state
 * @property string $use
 * @property string $create_date
 * @property string $create_user
 * @property string $update_date
 * @property string $update_user
 *
 * The followings are the available model relations:
 * @property Counters $counter
 */
class CountersReadings extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CountersReadings the static model class
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
		return 'counters_readings';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('counter_id, reading_date, counter_state, use, create_date, create_user, update_date, update_user', 'required'),
			array('counter_id', 'numerical', 'integerOnly'=>true),
			array('counter_state, use', 'length', 'max'=>10),
			array('create_user, update_user', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, counter_id, reading_date, counter_state, use, create_date, create_user, update_date, update_user', 'safe', 'on'=>'search'),
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
			'counter' => array(self::BELONGS_TO, 'Counters', 'counter_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'counter_id' => 'Licznik',
			'reading_date' => 'Data odczytu',
			'counter_state' => 'Stan licznika',
			'use' => 'Zużycie',
			'create_date' => 'Data utworzenia',
			'create_user' => 'Utworzony przez',
			'update_date' => 'Data aktualizacji',
			'update_user' => 'Aktualizowany przez',
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
		$criteria->compare('counter_id',$this->counter_id);
		$criteria->compare('reading_date',$this->reading_date,true);
		$criteria->compare('counter_state',$this->counter_state,true);
		$criteria->compare('use',$this->use,true);
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