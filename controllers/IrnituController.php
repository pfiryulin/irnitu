<?php


namespace app\controllers;


use app\models\Roles;
use yii\web\Controller;

class IrnituController extends Controller
{
    public function actionIndex(){

        $role = Roles::find()->all();

        return$this->render('index', [
            'role'=>$role,
        ]);
    }
}