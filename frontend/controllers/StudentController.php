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
                    'checkstatus'=>'未审核',
                    'code'=>'学号',
                    'name'=>'姓名',
                    'status'=>'已提交',
                    'dept'=>'数理系',
                    'pro'=>'计科',
                    'class'=>'计科N142',
                    'classify'=>'职务',
                    'sex'=>'女',
                    'idcode'=>'330304199008134321',
                    'ethnicity'=>'汉族',
                    'contacts'=>'15757331245',
                    'duanhao'=>'661245',
                    'jiguan'=>'温州',
                    'shengyuandi'=>'温州',
                    'religious'=>'无',
                    'politicalstatus'=>'共青团员',
                    'addr'=>'浙江省嘉兴市南湖区',
                    'guardian'=>'监护人',
                    'guardiancontacts'=>'监护人联系方式',
                    'building'=>'楼宇',
                    'dormnumber'=>'学生寝室号',
                    'bednumber'=>'床号',
                    'remark'=>'备注',
                ]
            ]
        ];
    }
}