<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "username".
 *
 * @property integer $u_id
 * @property string $u_name
 * @property string $u_sex
 * @property string $u_age
 * @property string $u_pwd
 * @property string $u_qpwd
 */
class Yiliao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'username';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_name', 'u_sex', 'u_age', 'u_pwd', 'u_qpwd'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'u_id' => 'U ID',
            'u_name' => 'U Name',
            'u_sex' => 'U Sex',
            'u_age' => 'U Age',
            'u_pwd' => 'U Pwd',
            'u_qpwd' => 'U Qpwd',
        ];
    }
}
