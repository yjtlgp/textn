<?php
namespace app\models;

use yii\db\ActiveRecord;

class Market extends ActiveRecord{
    public static function tableName(){
        return "stu";
    }
    public function rules(){
        return ['s_number','s_name','s_sex','s_cardid','s_study','s_min','s_jiguan','s_phone','s_bumen','s_zhuanye','s_xuezhi','s_datetime','s_states','s_xueyuan','s_class','s_shifou','string',255];
    }
}

?>