<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $full_name
 * @property string $username
 * @property string $email
 * @property string $password
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'username', 'email', 'password'], 'required'],
            [['full_name', 'username', 'email', 'password'], 'string', 'max' => 50],
            ['email', 'email'],
            ['email', 'unique'],
            ['username', 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }
}
