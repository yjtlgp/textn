<?php

namespace app\models;
use yii\helpers\Html;
use app\models\UploadForm;

use Yii;

/**
 * This is the model class for table "images".
 *
 * @property integer $image_id
 * @property string $image_file
 * @property string $image_name
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {




        return [
            [['file'], 'file'],
            [['image_file', 'image_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'image_id' => '编号',
            'image_file' => '文件名称',
            'image_name' => '图片',
        ];
    }
}
