<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rbacrole".
 *
 * @property integer $r_id
 * @property string $r_name
 * @property integer $c_id
 */
class Rbacrole extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rbacrole';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id'], 'integer'],
            [['r_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'r_id' => 'R ID',
            'r_name' => 'R Name',
            'c_id' => 'C ID',
        ];
    }
}
