<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\UsersFrom;
use app\models\ContactForm;

class RoleController extends Controller
{
    public function actionIndex(){
        $this->layout=false;
        return  $this->render('index');
    }

    public function actionAdd(){
        $this->layout=false;
        return  $this->render('add');
    }

    public function actionEdit(){
        $this->layout=false;
        return  $this->render('edit');
    }
}



