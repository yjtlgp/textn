<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\UserFrom;
use app\models\UsersFrom;
use app\models\ContactForm;

class HelloController extends Controller
{
	function actionLogin(){
		 header("content-type:text/html;charset=utf-8");
		 $request = Yii::$app->request;
		 $users = new UsersFrom();
		 if($request->isPost){
             $name=$request->post('admin_name','');
			 $pwd=$request->post('admin_pwd','');
			 $users->name=$name;
                 $users->password=$pwd;
                 if($users->save()){
                     return $this->redirect('index.php?r=hello/index');
                 }else{
				 die('注册失败');
			 }
		 }
		 return $this->render('login');
	}

	function actionIndex(){
        return $this->render("index");
    }

	function actionLunbo(){

        return $this->render("lunbo");
    }

    function actionLogin1(){
        header("content-type:text/html;charset=utf-8");
            $request = Yii::$app->request;
            $users = new UserFrom();
            if($request->isPost){
                $name=$request->post('username','');
                $pwd=$request->post('pwd','');
                $users->username=$name;
                $users->password=$pwd;
            if($users->save()){
                    return $this->redirect('index.php/?r=hello/index');
            }else{
                    die('注册错误！');

            }
        }

     return $this->render("login1");
    }

    function actionLogin2(){
        return $this->render('login2');

    }





}
