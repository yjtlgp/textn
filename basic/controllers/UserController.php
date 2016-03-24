<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\UserFrom;
use app\models\UsersFrom;
use app\models\ContactForm;
use app\models\Admin;

class UserController extends Controller
{
    //列表
    public $enableCsrfValidation = false;


    public function actionIndex(){
        $this->layout=false;

        $connection = Yii::$app->db;
        $command = $connection->createCommand('SELECT * FROM admin');
        $rows = $command->queryAll();
        return  $this->render('index',array('var'=>$rows));
    }



    //添加
    public function actionAdd(){
        $this->layout=false;
        $this->render('add');
    }
    public function actionAddadmin(){
        $this->layout=false;
        $request = Yii::$app->request;
        $admin = new Admin();
        if($request->isPost){
            $name=$request->post('admin_name','');
            $pwd=$request->post('admin_pwd','');
            $admin->admin_name=$name;
            $admin->admin_pwd=$pwd;

        }
        $sql="insert into admin ()values()";

        //print_r($_POST);die;
        $this->render('admin');
    }




    //修改
    public function actionSave(){
        $this->layout=false;
        $id=$_GET['id'];
        //echo $id;
        $sql="select * from admin where admin_id=$id";
        $rows=\Yii::$app->db->createCommand($sql)->queryAll();
        return  $this->render('edit',['var'=>$rows]);
    }


    //修改
    public function actionUpdate(){
        $this->layout=false;
        $request = Yii::$app->request;
        $admin = new Admin();
        if($request->isPost){
            $id=$request->post('admin_id','');
            $name=$request->post('admin_name','');
            $pwd=$request->post('admin_pwd','');
            $admin->admin_id=$id;
            $admin->admin_name=$name;
            $admin->admin_pwd=$pwd;

        }
        $sql="update admin set admin_name='$name',admin_pwd='$pwd' where admin_id=$id";
       // echo $sql;die;
        $arr=\Yii::$app->db->createCommand($sql)->execute();
        $sql="select * from admin";
        $arrs=\Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('index',array('var'=>$arrs));

    }


    //删除
    public function actionDel(){
        $this->layout=false;
        $id=$_GET['id'];
        //echo $id;
        $sql="delete from admin where admin_id='$id'";
        $hh=\Yii::$app->db->createCommand($sql)->execute();
        $sql="select * from admin";
        $rows=\Yii::$app->db->createCommand($sql)->queryAll();
        //print_r($rows);
        return  $this->render('index',['var'=>$rows]);
    }
}