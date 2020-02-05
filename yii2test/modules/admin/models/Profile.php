<?php
/**
 * Created by PhpStorm.
 * User: volga
 * Date: 04.02.2020
 * Time: 14:44
 */

namespace app\modules\admin\models;
use yii\web\UploadedFile;

use yii\db\ActiveRecord;

class Profile extends ActiveRecord
{
    public static function tableName(){
        return 'profile';
    }

    public function rules()
    {
        return [
            [['name', 'age', 'weight', 'height', 'size'], 'required'],
            ['img', 'file', 'extensions' => ['jpg', 'png']],
        ];
    }

    public function upload()
    {
        if ($this->validate('img')) {
            if($this->img){
                $this->img->saveAs('img/' . $this->img->baseName . '.' . $this->img->extension);
            }

            return true;
        } else {
            return false;
        }
    }

} 