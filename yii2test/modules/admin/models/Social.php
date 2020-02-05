<?php
/**
 * Created by PhpStorm.
 * User: volga
 * Date: 04.02.2020
 * Time: 11:24
 */

namespace app\modules\admin\models;
use yii\db\ActiveRecord;

class Social extends ActiveRecord
{
    public static function tableName(){
        return 'social';
    }
    public function rules()
    {
        return [

            [['url'], 'required'],


        ];
    }
} 