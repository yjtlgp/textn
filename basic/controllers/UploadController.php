<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\UploadedFile;
use app\models\UploadForm;
use app\models\Member;


    class UploadController extends Controller{
        public function actionUpload()
        {
            $model = new UploadForm();

            if (Yii::$app->request->isPost){
                $request = Yii::$app->request;
                $name=$request->post('image_file','');
                //echo $name;die;
                $model->file = UploadedFile::getInstance($model, 'file');
                $model->file->saveAs('uploads/' . $model->file->baseName . '.' . $model->file->extension);
                $file_name=$model->file->baseName . '.' . $model->file->extension;
                $filename="uploads/".$file_name;
                //echo $filename;die;
                $request = Yii::$app->db;
                $re=$request->createCommand("insert into images (image_file,image_name) values ('$name','$filename')")->execute();
                if($re==1){
                    echo "<a href='index.php?r=upload/show'>查看广告</a>";die;
                }else{
                    echo "失败";die;
                }
            }
            return $this->render('upload', ['model' => $model]);
        }
        public function actionShow(){
            //echo $sql;die;
            $model = new Member();
            $model->deleteAll();
            //print_r($model);die;
            $connection = Yii::$app->db;
            $command = $connection->createCommand('SELECT * FROM images');
            $rows = $command->queryAll();


            return  $this->render('show',array('var'=>$rows));
        }
    }
?>