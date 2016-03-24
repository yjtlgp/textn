<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Yiliao;

class YiliaoController extends Controller{
    public function actionIndex(){
        return $this->render('index');
    }
    public function actionRe(){
        $request=Yii::$app->request;
        $name=$request->post('name','');
        $sex=$request->post('sex','');
        $age=$request->post('age','');
        //$pwd=$request->post('pwd','');
        //$qpwd=$request->post('qpwd','');
        //echo $age;die;
        $yiliao=new Yiliao();
        $yiliao->u_name=$name;
        $sex->u_name=$sex;
        $age->u_name=$age;
        //$pwd->u_name=$pwd;
        //$qpwd->u_name=$qpwd;
        $a=$yiliao->save();
        exit(json_encode($a));
    }
}
?>