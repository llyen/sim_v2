<?php

class WebUser extends CWebUser
{

   private $_model;

   public function getModel()
   {
      if ($this->_model === null)
      {
         $this->_model = Users::model()->findByAttributes(array('username' => Yii::app()->user->name));
      }
      return $this->_model;
   }

   
   public function login($identity, $duration=0)
   {
        $this->_model = Users::model()->findByAttributes(array('username' => Yii::app()->user->name));
        parent::login($identity, $duration);
   }
}