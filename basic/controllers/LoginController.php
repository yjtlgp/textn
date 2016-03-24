<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class LoginController extends Controller
{

    //信息添加  添加显示页面和添加处理使用同一个方法
    public function actionLogin(){
        $user=new User();
        if(isset($_POST['User'])){
//            foreach ($_POST['User'] as $k =>$v){
//                $user->$k=$v;
//            }
            if(is_array($_POST['User']['hobby']))
                $_POST['User']['hobby']=  implode(",", $_POST['User']['hobby']);
            //print_r($_POST['User']);
            $user->attributes=$_POST['User'];
            if($user->save()){
                echo 'success';
            }else{
                echo 'error';
            }
        }
        $this->renderPartial("new",array("model"=>$user));

    }
	//public function actionAdd()
	//{
	//	return $this->render('add');
	//}
}
?>