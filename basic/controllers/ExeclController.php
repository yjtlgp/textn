<?php
namespace app\controllers;

use Yii;
use app\models\Execl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class ExeclController extends Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        $model=new Execl();
        $arr=$model->find()->all();
        //print_r($arr);
        $arr=$model->where(["'u_area like %北%'"  ])->find()->all();
        print_r($arr);

        return $this->render('index',['arr'=>$arr]);
    }
    public function actionDel(){
        $id=$_GET['id'];
        //echo $id;
        $model=new Execl();
        $model::deleteAll("u_id=$id");
        $arr=$model->find()->all();
        //print_r($arr);
        return $this->render('index',['arr'=>$arr]);


    }
    public function actionSearch(){
        //$area=$_GET['area'];
        //echo "sfadsad";
        $model=new Execl();
        $area="北";
        $arr=$model->find()->where(['u_area like like "%$area%"'  ])->all();
        //print_r($arr);
        return $this->render('index',['arr'=>$arr]);
    }
    public function actionDaochu(){
        //echo "dsaf";
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="后台用户信息.xlsx"');
        header('Cache-Control: max-age=0');
          //$area=$_GET['area'];
          //echo $area;die;
        $model=new Execl();
        $arr=$model->find()->where(['u_area'=>"北京"])->all();
        //print_r($arr);die;
        $str="姓名\t年龄\t性别\t手机号\t所在地区\t注册时间";
        foreach($arr as $v){
            $str.=
                "\n".$v['u_name']."\t".$v['u_age']."\t".$v['u_sex']."\t".$v['u_number']."\t".$v['u_area']."\t".$v['u_time']."\t\n";
        }
        echo $str."\n";
        //return $this->render('daochu',['arr'=>$arr]);
    }
}
?>