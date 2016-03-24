<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rbacinfo".
 *
 * @property integer $r_id
 * @property integer $c_id
 */
class Rbacinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rbacinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['r_id'], 'required'],
            [['r_id', 'c_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'r_id' => 'R ID',
            'c_id' => 'C ID',
        ];
    }
}
