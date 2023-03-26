<?php


namespace app\models;


use yii\db\ActiveRecord;

class Programs extends  ActiveRecord
{
    public static function tableName(){
        return 'programs';
    }
    public function rules()
    {
        return [
            [['programname', 'deskript'], 'required' ],
            ['deskript', 'string', 'max'=>1024],
            ['programname', 'unique',],
        ];

    }

    public function attributeLabels()
    {
        return [
            'programname' => 'Название программы',
            'deskript' => 'Описание',
        ];
    }

}