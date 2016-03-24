<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

/**
 * LoginForm is the model behind the login form.
 */
class UsersFrom extends ActiveRecord
{
    public static function tableName(){
        return 'users';
    }

    public function rules(){

        return [

            [['name','password'],'required']
        ];
    }

}
?>

