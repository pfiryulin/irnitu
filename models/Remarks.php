<?php


namespace app\models;


use yii\db\ActiveRecord;

class Remarks extends ActiveRecord
{
    public static function tableName()
    {
        return 'remarks';
    }
    public function getSubjects(){
        return $this->hasOne(Subjects::class, ['id'=>'subjectid']);
    }

    public function getPrograms(){
        return $this->hasOne(Programs::class, ['id'=>'programid']);
    }
}