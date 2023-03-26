<?php


namespace app\controllers;


use app\models\CreatureForm;
use app\models\Programs;
use app\models\Programsubject;
use app\models\Roles;
use app\models\Subjects;
use yii\base\BaseObject;
use yii\web\Controller;
use yii\web\Response;
use yii\widgets\ActiveForm;

class HeadController extends Controller
{
    public function actionIndex(){

         $programtable = new Programs();
         $program = Programs::find()->all();
         $model = new CreatureForm();
         $subjects = Subjects::find()->all();

//        $programtable->programname = 'Плавающие лодки';
//        $programtable->deskript = 'lorem10';
//        $programtable->save();
        $programtable->load(\Yii::$app->request->post());
        $programtable->save();
         if($programtable->save()){

             \Yii::$app->session->setFlash('success',
                 'Учебная программа создана, не забудьте добавить предметы');
             return $this->refresh();
         }
         else{
             \Yii::$app->session->setFlash('error',
                 'Что-то пошло не так, возможно такая программа уже есть');
             return $this->refresh();
         }
//         $programtable->load(\Yii::$app->request->post());
//         if(\Yii::$app->request->isAjax){
//             \Yii::$app->response->format = Response::FORMAT_JSON;
//             return ActiveForm::validate($programtable);
//         }
//             \Yii::$app->session->setFlash('success',
//                 'Учебная программа создана, не забудьте добавить предметы');
//             return $this->refresh();


        return$this->render('index', ['program' => $program,
            'model'=>$model,
            'subject'=>$subjects,
            'programtable' => $programtable]);





    }

    public function actionProgramcard($id){
        $program = Programs::find()->where(['id' =>$id])->one();
        $subjectsid = Programsubject::find()->where(['programid' => $id])->all();

        return $this->render('programcard',
            [
            'program'=>$program,
            'subid'=>$subjectsid,
            ],
        );
    }
}