<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property integer $unit_id
 * @property string $username
 * @property string $password
 *
 * The followings are the available model relations:
 * @property Units $unit
 */
class Users extends CActiveRecord
{
	public $unit_search;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password', 'required', 'message'=>'Proszę podaj wartość dla pola {attribute}'),
			array('username', 'unique', 'message'=>'Wartość pola {attribute} musi być unikalna'),
			array('unit_id', 'numerical', 'integerOnly'=>true),
			array('username, password', 'length', 'max'=>100, 'message'=>'{attribute} może mieć maksymalną długość 100 znaków'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, unit_id, username, password, unit_search', 'safe', 'on'=>'search'),
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
			'username' => 'Użytkownik',
			'password' => 'Hasło',
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
		$criteria->with = array('unit');
		$criteria->compare('id',$this->id);
		$criteria->compare('unit_id',$this->unit_id);
		$criteria->compare('unit.name',$this->unit_search,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'defaultOrder'=>'unit_id asc',
				'attributes'=>array(
					'unit_search'=>array(
						'asc'=>'unit.name',
						'desc'=>'unit.name desc',
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
	
	/**
         * @return actions to perform before saving ie: hash password
         */
        public function beforeSave()
        {
		$pass = sha1(md5($this->password));
		$this->password = $pass;
		return true;
        }
	
	public function beforeValidate()
	{
		$this->unit_id = ($this->unit_id==0) ? '' : $this->unit_id;
		return parent::beforeValidate();	
	}
}