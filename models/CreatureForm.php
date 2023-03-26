<?php


namespace app\models;


use yii\base\Model;

class CreatureForm extends Model
{
    public $nameprogram;
    public $description;
    public $subject;

    public function rules()
    {
        return [[['nameprogram', 'description'], 'required' ],];
    }

    public function attributeLabels()
    {
        return [
            'nameprogram' => 'Название программы',
            'description' => 'Описание',
        ];
    }
}