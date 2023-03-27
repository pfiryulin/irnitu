<?php


namespace app\controllers;


use app\models\Programs;
use app\models\Remarks;
use app\models\Subjects;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

class SupervisorController extends Controller
{
    public function actionIndex(){
        $programs = Programs::find()->all();
        return $this->render('index',
        [
            'programs'=>$programs,
        ]
        );
    }

    public function actionRemarks(){
        $remarks = Remarks::find()->all();
        return $this->render('remarks', [
            'remark' =>$remarks,
        ]);
    }

    public function actionSubjectlist(){
        $subjects = Subjects::find()->all();

        return $this->render('subjectslist',
            [
                'subid'=>$subjects,
            ]);
    }

    public function actionSendremark(){
        $model = new Remarks();
        $programs = Programs::find()->all();
        $program = ArrayHelper::map($programs, 'id', 'programname');
        $subjects = Subjects::find()->all();
        $subject = ArrayHelper::map($subjects, 'id', 'subjectname');
        if($model->load(\Yii::$app->request->post()) && $model->save()){

            return $this->refresh();
        }
        return $this->render('sendremark', compact('model',
        'program',
            'subject'));
    }

}
