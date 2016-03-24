<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rbacjue".
 *
 * @property integer $r_id
 * @property integer $p_id
 */
class Rbacjue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rbacjue';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['r_id'], 'required'],
            [['r_id', 'p_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'r_id' => 'R ID',
            'p_id' => 'P ID',
        ];
    }
}
