<?php


namespace app\models;


use yii\db\ActiveRecord;

class Indikators extends ActiveRecord
{
    public static function tableName()
    {
        return 'indicators';
    }
}