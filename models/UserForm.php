<?php

namespace app\models;

use Yii;
use yii\base\Model;

class UserForm extends Model
{
    public $full_name;
    public $username;
    public $email;
    public $password;

    public function rules(){
        return [
            [['full_name', 'username', 'email', 'password'], 'required'],
            ['email', 'email'],
            ['email', 'unique']
        ];
    }
}