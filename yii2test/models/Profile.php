<?php
/**
 * Created by PhpStorm.
 * User: volga
 * Date: 03.02.2020
 * Time: 7:55
 */

namespace app\models;
use yii\db\ActiveRecord;
class Profile extends ActiveRecord
{
    public static function tableName(){
        return 'profile';
    }
} 