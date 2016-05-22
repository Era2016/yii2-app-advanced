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

class CountryController extends Controller
{
    public function actionIndex()
    {
        $query = Country::find();
        $pagination = new Pagination([
                'defaultPageSize' => 5,
                'totalCount' => $query->count(),
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










}
