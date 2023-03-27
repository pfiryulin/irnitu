<?php


namespace app\models;


use yii\db\ActiveRecord;

class Subjects extends  ActiveRecord
{


    public static function tableName(){

        return 'subjects';
    }

    public function rules(){
        return [
            [['subjectname',], 'string'],
            [['knowledge', 'skill', 'competency'], 'string', 'max'=>1024],
        ];

//            ['subjactname', 'knowledge', 'skill', 'competency'], 'required',
//            ['subjactname',], 'unique',
//            [ 'knowledge', 'skill', 'competency'], ,

    }

    public function attributeLabels()
    {
        return [
            'subjectname' => 'Название предмета',
            'knowledge' => 'Знания',
            'skill' => 'Умения',
            'competency' => 'Навыки',
        ];
    }

}