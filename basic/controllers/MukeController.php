<?php
namespace app\controllers;

use Yii;
use app\models\Rbacuser;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class MonthController extends Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        return $this->render('index');
    }
}