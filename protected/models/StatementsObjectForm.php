<?php

/**
 * StatementsObjectForm class.
 */
class StatementsObjectForm extends CFormModel
{
	
        public $object_id;
        
	public function rules()
	{
		return array(
            array('object_id', 'required', 'message'=>'Proszę podaj wartość dla pola {attribute}'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'object_id'=>'Obiekt',
		);
	}

}