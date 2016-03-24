<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guan".
 *
 * @property integer $g_id
 * @property string $g_name
 * @property string $g_time
 */
class Guan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['g_time'], 'safe'],
            [['g_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'g_id' => 'G ID',
            'g_name' => 'G Name',
            'g_time' => 'G Time',
        ];
    }
}
