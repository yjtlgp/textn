<?php
namespace app\controllers;

use Yii;
use app\models\Market;
use yii\web\Controller;
use yii\data\Pagination;

class MarketController extends Controller
{
    public function actionIndex()
    {
        $model=new Market();
        $arr=$model::find();
        //print_r($arr);die;

        $pages = new Pagination(['totalCount' => $arr->count(),'pagesize'=>10]);
        $models = $arr->offset($pages->offset)
            ->limit($pages->limit)
            ->all();


        return $this->render('index',['arr'=>$models,'pages'=>$pages]);
    }
    public function actionSearch(){
        //print_r($_POST);
       $s_name=$_GET['s_name'];
        $s_bumen=$_GET['s_bumen'];
        $s_zhuanye=$_GET['s_zhuanye'];
        $s_xueyuan=$_GET['s_xueyuan'];
        $s_class=$_GET['s_class'];



        //echo $s_name;die;
        $model=new Market();
        $arr=$model::find()->where("s_name like '%$s_name%' and s_bumen like '%$s_bumen%' and s_zhuanye like '%$s_zhuanye%' and s_xueyuan like '%$s_xueyuan%' and s_class like '%$s_class%'");
        //print_r($arr);die;

        $pages = new Pagination(['totalCount' => $arr->count(),'pagesize'=>10]);
        $models = $arr->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('add',['arr'=>$models,'pages'=>$pages]);
    }
}
?>