<?php


namespace app\controllers;


use app\models\Programs;
use app\models\Programsubject;
use app\models\Roles;
use app\models\Subjects;
use yii\web\Controller;

class HeadController extends Controller
{
    public function actionIndex(){


         $program = Programs::find()->all();

        return$this->render('index', [
            'program'=>$program,
        ]);



    }

    public function actionProgramcard($id){
        $program = Programs::find()->where(['id' =>$id])->one();
        $subjectsid = Programsubject::find()->where(['programid' => $id])->all();
        $a = $subjectsid->subjectid;
        $subjects = Subjects::find()->where(['id' => [$a]])->all();
        return $this->render('programcard', ['id' => $id, 'program'=>$program, 'subid'=>$subjectsid, 'sub'=>$subjects], );
    }
}