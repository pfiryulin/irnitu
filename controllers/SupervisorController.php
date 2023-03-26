<?php


namespace app\controllers;


use yii\web\Controller;

class SupervisorController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}
