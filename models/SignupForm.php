<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $f_name;
    public $l_name;
    public $gender;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username','username','email','f_name','l_name'], 'trim'],
            [['username','username','email','f_name','l_name','gender'],
                'required','message' => 'Заполните поле.'],


            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Это имя занято.'],
            ['username', 'string', 'min' => 4, 'max' => 255],

            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Этот адрес уже существует.'],

            ['password', 'string', 'min' => 6],

            ['f_name','trim'],
            ['f_name', 'required'],
            ['f_name', 'filter', 'filter'=>'ucfirst'],

            ['gender','integer']
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->f_name = $this->f_name;
        $user->l_name = $this->l_name;
        $user->gender = $this->gender;
        $user->pasw_nohash = $this->password;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }

    public function beforeValidate(){
        $this->l_name = mb_convert_case($this->l_name, MB_CASE_TITLE, "UTF-8");
        $this->f_name = mb_convert_case($this->f_name, MB_CASE_TITLE, "UTF-8");
        return parent::beforeValidate();
    }


}
