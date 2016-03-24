<?php
namespace app\controllers;

use Yii;
use app\models\Area;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class SanController extends Controller{
    public function actionIndex()
    {
        $model=new Area();
        $arr=$model->find()->where(['parent_id'=>0])->all();
        //print_r($arr);

        return $this->renderPartial('index',['arr'=>$arr]);
    }
    public function actionAa(){
        //print_r($_POST);
        $aa=$_POST['change'];
        json_encode($aa);
    }
}

?>