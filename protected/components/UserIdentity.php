<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
		
	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{	
		$record = Users::model()->findByAttributes(array('username' => $this->username));
		if($record === null)
		    $this->errorCode = self::ERROR_USERNAME_INVALID;
		else if($record->password !== sha1(md5($this->password))) //hash function!
		    $this->errorCode = self::ERROR_PASSWORD_INVALID;
		else
		{
		    $this->_id = $record->username;
		    $uid = ($record->unit_id != null ) ? $record->unit_id : 1;
		    $this->setState('unit_id', $uid);
		    $this->errorCode = self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
	
	public function getId()
	{
		return $this->_id;
	}

}