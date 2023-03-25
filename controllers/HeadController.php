<?php


namespace app\controllers;


use app\models\Programs;
use app\models\Roles;
use yii\web\Controller;

class HeadController extends Controller
{
    public function actionIndex(){


        $program = Programs::find()->all();

        return$this->render('index', [
            'program'=>$program,
        ]);
    }

    public function actionProgramcard(){
        $prog = Programs::find()->where(['id' => $program->id]);
        return $this->render('programcard', ['prog'=>$prog]);
    }
}