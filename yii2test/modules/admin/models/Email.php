<?php
/**
 * Created by PhpStorm.
 * User: volga
 * Date: 05.02.2020
 * Time: 4:04
 */

namespace app\modules\admin\models;


use yii\base\Model;

class Email extends Model
{
        public $email;

    public function rules()
    {
        return [

            [['email'], 'required'],
            ['email', 'email'],

        ];
    }

} 