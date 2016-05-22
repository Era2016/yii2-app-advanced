<?php
/**
 * Created by PhpStorm.
 * User: fan
 * Date: 5/22/16
 * Time: 16:24
 */
namespace frontend\controllers;
use yii\web\Controller;

class ExampleController extends Controller
{
    public function actionIndex()
    {
        $message = "index action of the ExampleController";
        return $this->render("example",[
            'message' => $message
        ]);
    }

    public function actionHelloWorld()
    {
        return "hello world";
    }
}