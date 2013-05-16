<?php

/**
 * This is the model class for table "collection_points".
 *
 * The followings are the available columns in table 'collection_points':
 * @property integer $id
 * @property integer $object_id
 * @property string $symbol
 * @property string $multiplicand
 * @property string $create_date
 * @property string $create_user
 * @property string $update_date
 * @property string $update_user
 *
 * The followings are the available model relations:
 * @property Objects $object
 * @property Counters[] $counters
 */
class CollectionPoints extends CActiveRecord
{
	/**
	 * search properties
	 */
	public $unit_search;
	public $object_search;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CollectionPoints the static model class
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
		return 'collection_points';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('object_id, create_date, create_user, update_date, update_user', 'required', 'message'=>'Proszę podaj wartość dla pola {attribute}'),
			array('object_id', 'numerical', 'integerOnly'=>true),
			array('symbol', 'length', 'max'=>255, 'message'=>'{attribute} może mieć maksymalną długość 255 znaków'),
			array('multiplicand', 'length', 'max'=>10, 'message'=>'{attribute} może mieć maksymalną długość 10 znaków'),
			array('create_user, update_user', 'length', 'max'=>100, 'message'=>'{attribute} może mieć maksymalną długość 100 znaków'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, object_id, symbol, multiplicand, create_date, create_user, update_date, update_user, unit_search, object_search', 'safe', 'on'=>'search'),
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
			'object' => array(self::BELONGS_TO, 'Objects', 'object_id'),//'alias' => 'object'),
			'counters' => array(self::HAS_MANY, 'Counters', 'collection_point_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'object_id' => 'Obiekt',
			'symbol' => 'Symbol',
			'multiplicand' => 'Mnożnik',
			'create_date' => 'Data utworzenia',
			'create_user' => 'Utworzony przez',
			'update_date' => 'Data aktualizacji',
			'update_user' => 'Aktualizowany przez',
			'object_search' => 'Obiekt',
			'unit_search' => 'Jednostka',
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
		$criteria->with = array('object');
		
		$criteria->compare('id',$this->id);
		$criteria->compare('object.name',$this->object_search,true);
		//$criteria->compare('object_id',$this->object_id);
		$criteria->compare('symbol',$this->symbol,true);
		$criteria->compare('multiplicand',$this->multiplicand,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_user',$this->create_user,true);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('update_user',$this->update_user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'attributes'=>array(
					'object_search'=>array(
						'asc'=>'object.name',
						'desc'=>'object.name desc',
					),
					'*',
				),
			),
			'pagination'=>array(
				'pageSize'=>15,
				'pageVar'=>'p',
			),
		));
	}
	
	public function beforeValidate()
	{
		$this->multiplicand=str_replace(',', '.', $this->multiplicand);
		$this->update_date=new CDbExpression("NOW()");
		$this->update_user=Yii::app()->user->name;
		if($this->isNewRecord) $this->create_user=Yii::app()->user->name;

		return parent::beforeValidate();	
	}
}