<?php
namespace app\controllers;

use Yii;
use app\models\Rbacuser;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\Rbacrole;
use app\models\Rbacinfo;
use app\models\Rbacquan;
use app\models\Rbacjue;
use app\models\Guan;
use app\models\Info;
use app\models\Mshop;


class MonthController extends Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionSel()
    {
        //print_r($_POST);die;
        $request=Yii::$app->request;
        $username=$request->post('username','');
        $pwd=$request->post('pwd','');
        //echo $username;die;
        $model=new Rbacuser();
        $arr=$model->find()->where(['u_name'=>$username])->asArray()->one();
        //print_r($arr);die;
        if(!empty($arr)){

            if($arr['u_pwd']==$pwd){
                $session = Yii::$app->session;
                $session->open();
                $session->set('user',$username);
                echo "<script>alert('登陆成功');</script>";
                $guan=new Guan();
                $guan->g_name=$username;
                $guan->g_time=date('Y-m-d H:i:s');
                $guan->save();
                $rmodel=new Rbacrole();
                $role=$rmodel->find()->where(['r_id'=>$arr['r_id']])->asArray()->one();
                //print_r($role);
                if($arr['r_id']=$role['r_id']==4){
                    $guan=new Guan();
                    $user=$guan->find()->all();
                    $info=new Info();
                    $info=$info->find()->all();

                    return $this->render('index',['role'=>$role,'user'=>$user,'info'=>$info]);
                }else{

                    $rmodel=new Rbacrole();
                    $role=$rmodel->find()->where(['r_id'=>$arr['r_id']])->all();
                    $shop=new Mshop();
                    $shop2=$shop->find()->all();
                    return $this->render('jue',['role'=>$role,'shop'=>$shop2]);
                }

                //print_r($user);

            }else{
                echo "<script>alert('密码错误');</script>";
                return $this->render('index');
            }

        }else{
            echo "<script>alert('用户名错误');</script>";
            return $this->render('index');
        }

    }
    public function actionAdd(){
        $request=Yii::$app->request;
        $desc=$request->post('desc','');
        $info=new Info();
        $info->desc=$desc;

        $session = Yii::$app->session;
        $session->open();
        $username=$session->get('user');
        $info->name=$username;
        $info->time=date('Y-m-d H:i:s');
        if($info->save()){echo "<script>alert('发送成功');location.href='index.php?r=month/index'</script>";}
        $shop=new Mshop();
        $shop2=$shop->find()->all();

        //return $this->render('jue',['shop'=>$shop2]);
    }
    public function actionDel(){
        $_GET['id'];
    }
}
?>