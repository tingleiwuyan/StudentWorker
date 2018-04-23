<?php
/**
 * Created by PhpStorm.
 * User: jiangminjie
 * Date: 2018/4/18
 * Time: 下午1:09
 */

namespace frontend\controllers;


use yii\web\Controller;

class StudentController extends Controller
{
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index',[]);
    }

    public function actionTable()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        return [
            'code'=>0,
            'msg'=>'',
            'count'=>1,
            'data'=>[
                [
                    'id'=>1,
                    'username'=>'测试用户',
                    'sex'=>'测试用户',
                    'city'=>'测试用户',
                    'sign'=>'测试用户',
                    'experience'=>'测试用户',
                    'score'=>'测试用户',
                    'classify'=>'测试用户',
                    'wealth'=>'测试用户',
                ]
            ]
        ];
    }
}