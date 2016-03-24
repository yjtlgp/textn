<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "work".
 *
 * @property integer $work_id
 * @property string $work_pay
 * @property string $work_job
 * @property string $work_company
 * @property string $work_area
 * @property string $work_study
 * @property integer $work_release
 */
class Work extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'work';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['work_release'], 'integer'],
            [['work_pay'], 'string', 'max' => 255],
            [['work_job', 'work_company', 'work_area', 'work_study'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'work_id' => '编号',
            'work_pay' => '薪资',
            'work_job' => '期望职位',
            'work_company' => '期望公司',
            'work_area' => '地址',
            'work_study' => '学历',
            'work_release' => '工作地点 ',
        ];
    }
}
