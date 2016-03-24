<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;


class HongbaoController extends Controller
{

    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }
}