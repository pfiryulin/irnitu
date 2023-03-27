<?php


namespace app\models;


use yii\db\ActiveRecord;

class Bundletable extends  ActiveRecord
{
    public static function tableName(){
        return 'programsubject';
    }

    public function rules(){
        return[
            ['subjectid', 'programid'], 'required',
        ];
    }
}