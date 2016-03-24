<?php

namespace app\controllers;

use Yii;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MtGoodsController implements the CRUD actions for MtGoods model.
 */
class MemcacheController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}

?>