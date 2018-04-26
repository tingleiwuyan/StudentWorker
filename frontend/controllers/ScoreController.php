<?php
/**
 * Created by PhpStorm.
 * User: jiangminjie
 * Date: 2018/4/26
 * Time: 下午11:39
 */

namespace frontend\controllers;


use yii\console\Controller;

class ScoreController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index',[]);
    }
}