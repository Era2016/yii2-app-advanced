<?php
/**
 * Created by PhpStorm.
 * User: fan
 * Date: 5/22/16
 * Time: 22:42
 */
namespace frontend\controllers;

use yii;
use frontend\models\Country;
use yii\web\Controller;
use yii\data\Pagination;
use yii\db\Exception;

class CountryController extends Controller
{
    public function actionIndex()
    {
        //Yii::trace('start calculating average revenue','data/logs/test.txt');


        /*$sql = "select COUNT(*) from country";
        $command = yii::$app->getDb()->createCommand($sql);
        $query = $command->queryAll();*/

        $query = Country::find();

        //$query = new Country();
        //$query = $query->find();

        $pagination = new Pagination([
                'defaultPageSize' => 5,
                'totalCount' => Country::getCountries(),//$query->count(),
            ]
        );
        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',[
            'countries' => $countries,
            'pagination' => $pagination,
        ]);

    }

    public function actionSearch()
    {
        $request = Yii::$app->request->get();
        if (!isset($request['country']) || !isset($request['population']))
        {
            return json_encode(['error' => -1, 'msg' => 'lose params']);
        }
        $population = $request['population'];
        $country = $request['country'];
        $query = Country::find()->where(['name' => $country, 'population' => $population])->one();
        //var_dump($query);
        if (!isset($query))
        {
            return json_encode(['msg'=>"result empty"]);
        }
        return json_encode(['code'=>$query['code'], 'name'=>$query['name'], 'population'=>$query['population']]);
    }

    public function actionUpdate()
    {
        $request = yii::$app->request->get();
        if (!isset($request['population']) || !isset($request['code']))
        {
            return json_encode(['error' => -1, 'msg' => "lose params"]);
        }
        $population = $request['population'];
        $code = $request['code'];
        try {
            $sql = "update country set population = $population where code = '$code'";
            $command = yii::$app->getDb()->createCommand($sql);
            $command->execute();
        }catch (Exception $e)
        {
            return json_encode($e->getMessage());
        }

        return json_encode(['msg' => 'ok']);
    }

}
