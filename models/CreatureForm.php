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
        return [
                [['nameprogram', 'description'], 'required' ],
                ['description', 'string', 'max'=>1024],
            ];

    }

    public function attributeLabels()
    {
        return [
            'nameprogram' => 'Название программы',
            'description' => 'Описание',
        ];
    }
}