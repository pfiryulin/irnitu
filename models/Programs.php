<?php


namespace app\models;


use yii\db\ActiveRecord;

class Programs extends  ActiveRecord
{
    public static function tableName(){
        return 'programs';
    }

}