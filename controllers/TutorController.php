<?php


namespace app\controllers;


use app\models\Indikators;
use app\models\Programs;
use app\models\Programsubject;
use app\models\Recommendations;
use app\models\Subjects;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

class TutorController extends Controller
{
    public function actionIndex(){

        $programSubjectTable = Programsubject::find()->all();

        return $this->render('index',
        [
           'program' =>$programSubjectTable
        ]);
    }

    public function actionRecomendation(){


        $subjects = Subjects::find()->all();
        $subject = ArrayHelper::map($subjects, 'id', 'subjectname');
        $programs = Programs::find()->all();
        $program = ArrayHelper::map($programs, 'id', 'programname');
        $programprompt = 'Выбирете программу';
        $indikators = Indikators::find()->all();
        $indikator = ArrayHelper::map($indikators, 'id','indikatorname' );
        $model = new Recommendations();

        if($model->load(\Yii::$app->request->post()) && $model->save()){
            return $this->refresh();
        }

        return$this->render('recomendation',
        [
            'subjects' => $subjects,
            'model' => $model,
            'programs'=>$programs,
            'program' => $program,
            'programprompt'=>$programprompt,
            'subject'=>$subject,
            'indikator'=>$indikator
        ]);
    }


}