<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class PhoneController extends Controller
{
    public function actionPhone()
    {
        return $this->render('phone');
    }
}
