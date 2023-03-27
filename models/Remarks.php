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

    public function rules(){
        return [
            [['programid', 'subjectid', 'text'], 'required'],
            [['programid', 'subjectid', ], 'string'],
            ['text', 'string', 'max' => 1024],
        ];
    }

    public function attributeLabels()
    {
        return [
            'programid' => 'Учебная прграмма',
            'subjectid' => 'Предмет',
            'text' => 'Замечание',
        ];
    }
}