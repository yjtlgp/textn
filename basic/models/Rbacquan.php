<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rbacquan".
 *
 * @property integer $c_id
 * @property string $c_name
 */
class Rbacquan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rbacquan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c_id' => 'C ID',
            'c_name' => 'C Name',
        ];
    }
}
