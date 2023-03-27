<?php


namespace app\models;


use yii\db\ActiveRecord;

class Recommendations extends ActiveRecord
{
//    public $programid;
//    public $subjectid;
//    public $indikatorid;
//    public $text;

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

    public function rules()
    {
        return [

            ['text', 'string', 'max'=>1024],
            [['programid', 'subjectid', 'indikatorid'], 'default', 'value' => '0'],
            ['statusid', 'string'],
        ];

    }

    public function attributeLabels()
    {
        return [
            'programid' => 'Учебная программа',
            'subjectid' => 'Предмет',
            'indikatorid'=>'Индикатор',
            'text' => 'Ваша рекомендация',
        ];
    }

}