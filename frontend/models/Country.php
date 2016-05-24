<?php
/**
 * Created by PhpStorm.
 * User: fan
 * Date: 5/22/16
 * Time: 22:39
 */
namespace frontend\models;
use yii\db\ActiveRecord;

class Country extends ActiveRecord
{

    public static function getCountries()
    {
        return self::find()->count('*');
    }
}