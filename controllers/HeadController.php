<?php


namespace app\controllers;


use app\models\Bundletable;
use app\models\CreatureForm;
use app\models\Programs;
use app\models\Programsubject;
use app\models\Recommendations;
use app\models\Remarks;
use app\models\Roles;
use app\models\Subjects;
use yii\base\BaseObject;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\widgets\ActiveForm;
use yii;
use yii\web\Request;

class HeadController extends Controller
{
    public function actionIndex(){

         $programtable = new Programs();
         $program = Programs::find()->all();

         $subjects = Subjects::find()->all();
         $recomendations = Recommendations::find()->all();
        $recomendationsLenght = count($recomendations);
        $remarks = Remarks::find()->all();
        $remarkslength = count($remarks);








        return$this->render('index', ['program' => $program,
            'model'=>$model,
            'subject'=>$subjects,
            'programtable' => $programtable,
            'recomendlen' => $recomendationsLenght,
            'remarklen'=>$remarkslength,
            'a'=>$a,
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

    public function actionRemarks(){
        $remarks = Remarks::find()->all();
        return $this->render('remarks', [
            'remark' =>$remarks,
        ]);
    }

    public function actionUpdateprogram($id){
        $programTable = new Programs();
        $program = Programs::findOne(['id'=>$id]);
        $programSubjectList = Programsubject::find()->where(['programid' => $id])->all();
        $subjectList = Subjects::find()->all();




        if(!$program){
            throw new  NotFoundHttpException('Запись не найдена');
        }


        if($program->load(\Yii::$app->request->post()) && $program->save()){


            return $this->redirect('/?r=head');
        }
        return $this->render('updateprogram',[
            'program'=>$program,
            'programSubjectList'=>$programSubjectList,
            'subjectList'=>$subjectList,
            'programTable'=>$programTable,
        ]);

    }

    public function actionProgramcreate(){
        $programtableModel = new Programs();
        if($programtableModel->load(\Yii::$app->request->post()) && $programtableModel->save()){

            \Yii::$app->session->setFlash('success',
                'Учебная программа создана, не забудьте добавить предметы');

            $newid = Yii::$app->db->getLastInsertID($programtableModel->id);

             return $this->redirect(\yii\helpers\Url::to(['head/subjectadd', 'id' => $newid]));

        }

        return $this->render('programcreate',
        [
            'programtable' => $programtableModel,
            'newid' => $newid,
        ]);
    }

    public function actionSubjectadd($id){
        $bundle = new Programsubject();
        $program = Programs::findOne(['id'=>$id]);
        $subjects = Subjects::find()->all();
        $subject = ArrayHelper::map($subjects, 'id', 'subjectname');



      if($bundle->load(\Yii::$app->request->post()) && $bundle->save()){

          return $this->refresh();
        }


        return $this->render('subjectadd',
        [
            'subjects'=>$subjects,
            'subject'=>$subject,
            'program'=>$program,
            'bundle' => $bundle,
        ]);
    }

    public function actionSubjectupdate($id){
        $model = new Subjects();
        $subjects = Subjects::findOne(['id'=>$id]);

        if($model->load(\Yii::$app->request->post()) && $model->save()){
            return $this->redirect('/?r=head');
        }

        return $this->render('subjectupdate',
            [
        'model' => $model,
        'subjects' => $subjects,
                ],
        );
    }
}

