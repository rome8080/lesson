<?php
/**
 * Created by PhpStorm.
 * User: volga
 * Date: 03.02.2020
 * Time: 7:19
 */

namespace app\modules\admin\models;
use yii\db\ActiveRecord;


class Blok1 extends ActiveRecord
{
    public static function tableName(){
        return 'blok1';
    }

    public function rules()
    {
        return [

            [['name', 'text'], 'required'],


        ];
    }
} 