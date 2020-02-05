<?php
/**
 * Created by PhpStorm.
 * User: �����
 * Date: 31.10.2019
 * Time: 10:04
 */

namespace app\modules\admin\models;
use yii;

use yii\base\Model;

class UserForm extends Model
{
    public $username;
    public $password;
    private $_user = false;
	
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
           
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'password' => 'Пароль'
        ];
    }
    
     public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Не корректный пароль');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser());
        }
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}