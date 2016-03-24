<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

/**
 * joinWith()
 * innerJoinWith()
 * with()
 * hasMany()
 * deleteAll()
 * updateAll()
 * limit()
 * select()
 * from()
 * andHaving()
 * like语句
 */

class CompanyController extends Controller
{
    public function actionCompany()
    {
       // $this->layout=false;
       // $request=$this->request;
        $connection = \Yii::$app->db;

        $sql="select * from company";
        $rows = $connection->createCommand($sql)->queryAll();
        return $this->render('company',[
            'arr'=>array($rows),
            'models' => $models,
            'pages' => $pages,
        ]);
    }
    public function actionQing(){
        $id=$_GET['id'];
        $connection = \Yii::$app->db;
        $sql="select * from company where c_id=$id";
        //echo $sql;010
          //print_r($row);
        return $this->render('qing',['qing'=>array($row)]);
    }
    public function actionPing(){
        $id=$_GET['id'];
        return $this->render('ping');
    }
}
