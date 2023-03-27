<?php


namespace app\models;


use yii\db\ActiveRecord;

class Subjects extends  ActiveRecord
{
    public $knowledge;
    public $skill;
    public $competency;

    public static function tableName(){

        return 'subjects';
    }

}