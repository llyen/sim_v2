<?php

/**
 * ChangePasswordForm class.
 */
class ChangePasswordForm extends CFormModel
{
	
        //public $currentPassword;
        public $newPassword;
        public $newPasswordRepeat;
        
	public function rules()
	{
		return array(
			array('newPassword, newPasswordRepeat', 'required', 'message'=>'Proszę podaj wartość dla pola {attribute}'),
                        //array('currentPassword', 'validateCurrentPassword', 'message'=>'error'),
                        array('newPassword', 'length', 'max'=>100, 'message'=>'{attribute} może mieć maksymalną długość 100 znaków'),
			array('newPasswordRepeat', 'compare', 'compareAttribute'=>'newPassword', 'message'=>'Wartości wprowadzone w obu polach różnią się od siebie'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
                        //'currentPassword'=>'Aktualne hasło',
			'newPassword'=>'Nowe hasło',
			'newPasswordRepeat'=>'Powtórz nowe hasło',
		);
	}
        
        protected function hashPassword($password)
        {
            return sha1(md5($password));
        }
        
        /*public function validateCurrentPassword($attribute, $params)
        {
                if($this->hashPassword($this->currentPassword) === Users::model()->findByAttributes(array('username'=>Yii::app()->user->id))->password)
		
			$this->addError($attribute, 'Wprowadzone hasło jest nieprawidłowe.');
		//if(!empty($this->attribute))
		//	$this->addError($attribute, 'Wprowadzone hasło jest nieprawidłowe.');
		//return $this->hashPassword($this->currentPassword) === Users::model()->findByAttributes(array('username'=>Yii::app()->user->id))->password;
        }*/

}
