<?php


namespace app\models;


use yii\base\Model;

class CreatureForm extends Model
{
    public $programname;
    public $description;
    public $subjects;

    public function rules(){
        return [
            [['programname', 'description', 'subjects'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'programname' => 'Название программы',
            'description' => 'Описание программы',
            'subjects' => 'Выберете предметы программы',
        ];
    }
}