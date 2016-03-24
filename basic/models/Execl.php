<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "execl".
 *
 * @property integer $u_id
 * @property string $u_name
 * @property string $u_sex
 * @property string $u_number
 * @property integer $u_age
 * @property string $u_area
 * @property string $u_time
 */
class Execl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'execl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_age'], 'integer'],
            [['u_time'], 'safe'],
            [['u_name', 'u_number', 'u_area'], 'string', 'max' => 255],
            [['u_sex'], 'string', 'max' => 5]
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
            'u_number' => 'U Number',
            'u_age' => 'U Age',
            'u_area' => 'U Area',
            'u_time' => 'U Time',
        ];
    }
}
