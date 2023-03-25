<?php


namespace app\models;


use yii\db\ActiveRecord;

class Subjects extends  ActiveRecord
{
    public static function tableName(){
        return 'subjects';
    }
}