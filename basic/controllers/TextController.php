<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Liuyan;
use yii\db;
use yii\data\Pagination;

class TextController extends Controller
{
	public $enableCsrfValidation = false;
    public function actionIndex(){
		return $this->render('index');
	}
	public function actionAdd(){
		//print_r($_POST);die;
		$model=new Liuyan();
        $liu=Yii::$app->request->post('desc','');
		//echo $request;die;
		$model->l_desc="$liu";
		$re=$model->save();
		
			if($re){
				echo "<script>alert('添加成功');location.href='index.php?r=text/list'</script>";
			}else{
				echo "<script>alert('添加失败');location.href='/'</script>";
			}
	}
	public function actionList(){
		$model=new Liuyan();
		$arr=$model::find();
		//print_r($arr);die;
        //$sum=count($arr);
        //echo $sum;die;
        $pages = new Pagination([
            //'totalCount' => $countQuery->count(),
            'totalCount' => $arr->count(),
            'pageSize'   => 5   //每页显示条数
        ]);
		//print_r($pages);die;
        $models = $arr->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('list', [
            'arr' => $models,
            'pages'  => $pages
        ]);
}
	public function actionDel(){
		$model=new Liuyan();
		$id=$_GET['id'];
		//echo $id;die;
		$re=$model::deleteAll(['l_id'=>$id]);
		$model=new Liuyan();
		$arr=$model::find()->all();
		//print_r($arr);die;
		if($re){
				echo "<script>alert('删除成功');location.href='index.php?r=text/list'</script>";
				$model=new Liuyan();
		$arr=$model::find();
		//print_r($arr);die;
        //$sum=count($arr);
        //echo $sum;die;
        $pages = new Pagination([
            //'totalCount' => $countQuery->count(),
            'totalCount' => $arr->count(),
            'pageSize'   => 5   //每页显示条数
        ]);
		//print_r($pages);die;
        $models = $arr->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('list', [
            'arr' => $models,
            'pages'  => $pages
        ]);
			}else{
				echo "<script>alert('删除失败');location.href='/'</script>";
			}
		return $this->render('list',['arr'=>$arr]);
	}
	public function actionUpdate(){
        $id=$_GET['id'];
		$model=new Liuyan();
		$arr=$model::find()->where(['l_id'=>$id])->all();
		//print_r($arr);die;
		return $this->render('update',['arr'=>$arr]);
	}
	public function actionUpdateall(){
        $liu=Yii::$app->request->post('liu','');
		$desc=Yii::$app->request->post('desc','');
		//echo $liu;die;
        $db=Yii::$app->db;
        $sql="update  liuyan set l_desc='$desc' where l_id=$liu";
        $re=$db->createCommand($sql)->execute();
		if($re){
				echo "<script>alert('修改成功');location.href='index.php?r=text/list'</script>";
				$model=new Liuyan();
		$arr=$model::find();
		//print_r($arr);die;
        //$sum=count($arr);
        //echo $sum;die;
        $pages = new Pagination([
            //'totalCount' => $countQuery->count(),
            'totalCount' => $arr->count(),
            'pageSize'   => 5   //每页显示条数
        ]);
		//print_r($pages);die;
        $models = $arr->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('list', [
            'arr' => $models,
            'pages'  => $pages
        ]);
			}else{
				echo "<script>alert('修改失败');location.href='/'</script>";
			}

        //return $this->render('update',['arr'=>$arr]);
	}
	
}