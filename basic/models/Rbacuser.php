<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rbacuser".
 *
 * @property integer $u_id
 * @property string $u_name
 * @property string $u_pwd
 * @property integer $r_id
 */
class Rbacuser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rbacuser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['r_id'], 'integer'],
            [['u_name', 'u_pwd'], 'string', 'max' => 255]
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
            'u_pwd' => 'U Pwd',
            'r_id' => 'R ID',
        ];
    }
}
