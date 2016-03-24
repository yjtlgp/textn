<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/26
 * Time: 20:53
 */
namespace app\controllers;

use Yii;
use app\models\UserForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class KaoshiController extends Controller{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionLogin(){
        $request=Yii::$app->request;
        $u_name=$request->post('u_name','');
        $u_pwd=$request->post('u_pwd','');
        $data=["uname"=>$u_name,"upwd"=>$u_pwd];

        $model_user=new UserForm();
        $user=$model_user->find()->where("u_name='$u_name'")->asArray()->one();
        if($user){
            $return=["state"=>4];
            if($user['u_pwd']=="$u_pwd"){
                $return=["state"=>3];
            }else{
                $return=["state"=>2];
            }
        }else{
            $return=["state"=>1];
        }
        exit(json_encode($return));
    }
}

?>