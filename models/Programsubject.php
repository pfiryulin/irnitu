<?php


namespace app\models;


use yii\db\ActiveRecord;

class Programsubject extends  ActiveRecord
{
    public static function tableName(){
        return 'programsubject';
    }

    public function getSubjects(){
        return $this->hasOne(Subjects::class, ['id'=>'subjectid']);
    }

    public function getPrograms(){
        return $this->hasOne(Programs::class, ['id'=>'programid']);
    }

}
