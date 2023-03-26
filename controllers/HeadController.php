<?php


namespace app\controllers;


use app\models\CreatureForm;
use app\models\Programs;
use app\models\Programsubject;
use app\models\Recommendations;
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
         $recomendations = Recommendations::find()->all();
        $recomendationsLenght = count($recomendations);



        if($programtable->load(\Yii::$app->request->post()) && $programtable->save()){

            \Yii::$app->session->setFlash('success',
                'Учебная программа создана, не забудьте добавить предметы');
            return $this->refresh();
        }




        return$this->render('index', ['program' => $program,
            'model'=>$model,
            'subject'=>$subjects,
            'programtable' => $programtable,
            'recomendlen' => $recomendationsLenght,
            ]);






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

    public function actionSubjects(){
        $subjects = Subjects::find()->all();

        return $this->render('subjectslist',
        [
            'subid'=>$subjects,
            ]);
    }

    public function actionRecommendations(){
        $recommendations = Recommendations::find()->all();
        return $this->render('recommendations',
        [
            'recomendation' => $recommendations,
        ],
        );
    }
}