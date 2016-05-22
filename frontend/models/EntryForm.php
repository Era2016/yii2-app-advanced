<?php
/**
 * Created by PhpStorm.
 * User: fan
 * Date: 5/22/16
 * Time: 17:04
 */
namespace frontend\models;

use yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return[
            [['name','email'],'required'],
            ['email','email'],
        ];
    }
}