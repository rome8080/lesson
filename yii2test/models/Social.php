<?php
/**
 * Created by PhpStorm.
 * User: volga
 * Date: 03.02.2020
 * Time: 5:51
 */

namespace app\models;
use yii\db\ActiveRecord;

class Social extends ActiveRecord
{
    public static function tableName(){
        return 'social';
    }
} 