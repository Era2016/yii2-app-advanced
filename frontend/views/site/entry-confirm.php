<?php
/**
 * Created by PhpStorm.
 * User: fan
 * Date: 5/22/16
 * Time: 17:18
 */
use yii\helpers\Html;
?>

<p> You have entered the following infomation: </p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>