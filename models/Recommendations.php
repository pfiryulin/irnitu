<?php


namespace app\models;


use yii\db\ActiveRecord;

class Recommendations extends ActiveRecord
{
    public static function tableName()
    {
        return 'recommendations';
    }

    public function getSubjects(){
        return $this->hasOne(Subjects::class, ['id'=>'subjectid']);
    }

    public function getPrograms(){
        return $this->hasOne(Programs::class, ['id'=>'programid']);
    }

    public function getIndikators(){
        return $this->hasOne(Indikators::class, ['id'=>'indicatorid']);
    }

    public function getStatus(){
        return $this->hasOne(Status::class, ['id'=>'statusid']);
    }
}