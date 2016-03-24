<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\Shop;

class ShopController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        header("content-type:text/html;charset=utf8");
        //print_r($_POST);die;
        $request = Yii::$app->request;
        $type = $request->post('type');
        $phone = $request->post('phone');
        $pwd = $request->post('pwd');
        $qpwd = $request->post('qpwd');
        //echo $type;die;
        $customer = new Shop();

        //$shop=Shop();
        $arr = $customer->find()->where(['g_phone' => "$phone"])->all();

        //$sql="select * from gu where g_phone='$phone'";
        //$command = $connection->createCommand($sql);
        //print_r($arr);die;

            $customer->type = $type;
            $customer->g_phone = $phone;
            $customer->g_pwd = $pwd;
            $customer->g_qpwd = $qpwd;
            if ($pwd == "$qpwd") {
                $customer->save();
            } else {
                echo "确认密码错误";
            }


        if($type=='雇主'){
            return $this->render('login');
        }else if($type=='木匠'){
            $customer = new Shop();

            //$shop=Shop();
            $arr = $customer->find()->all();
            //print_r($arr);die;
            //print_r($arr);die;
            return $this->render('search',['arr'=>$arr,]);
        }

    }
//    public function actionSearch(){
//        $customer = new Shop();
//
//        //$shop=Shop();
//        $arr = $customer->find()->all();
//        print_r($arr);die;
//        //return $this->render('search',['arr'=>$arr]);
//    }
    public function actionInsert(){
        //print_r($_POST);die;
        $request = Yii::$app->request;
        $customer = new Shop();
        $desc = $request->post('desc');
        $customer->g_desc = $desc;
        $customer->save();
        $customer = new Shop();

        //$shop=Shop();
        $arr = $customer->find()->all();
        //print_r($arr);die;
        //print_r($arr);die;
        return $this->render('insert',['arr'=>$arr]);
    }
}


?>