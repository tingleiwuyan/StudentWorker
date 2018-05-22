<?php
/**
 * Created by PhpStorm.
 * User: jiangminjie
 * Date: 2018/4/18
 * Time: 下午1:09
 */

namespace frontend\controllers;


use common\models\Student;
use yii\web\Controller;

class StudentController extends Controller
{
    public function actionIndex()
    {
        $get = \Yii::$app->request->get();
        $dept = isset($get['dept']) ? $get['dept'] : "";
        $pro = isset($get['pro']) ? $get['pro'] : "";
        $class = isset($get['class']) ? $get['class'] : "";
        $name = isset($get['name']) ? $get['name'] : "";
        $code = isset($get['code']) ? $get['code'] : "";
        $dormnumber = isset($get['dormnumber']) ? $get['dormnumber'] : "";
        return $this->render('index',[
            'dept'=>$dept,
            'pro'=>$pro,
            'class'=>$class,
            'name'=>$name,
            'code'=>$code,
            'dormnumber'=>$dormnumber,
        ]);
    }

    public function actionTable()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $page = \Yii::$app->request->get('page')-1;
        $num = \Yii::$app->request->get('limit');
        $name = \Yii::$app->request->get('name');
        $code = \Yii::$app->request->get('code');
        $pro = \Yii::$app->request->get('pro');
        $building_code = \Yii::$app->request->get('building');

        $query = Student::find();
        $query->andFilterWhere([
            'like','student_name',$name
        ]);
        $query->andFilterWhere([
            'student_code'=>$code,
            'building_code'=>$building_code
        ]);

        $students = $query->offset($num*$page)->limit($num)->all();
        $count = Student::find()->count();

        return [
            'code'=>0,
            'msg'=>'',
            'count'=>$count,
            'data'=>$students
        ];

//        return [
//            'code'=>0,
//            'msg'=>'',
//            'count'=>$count,
//            'data'=>[
//                [
//                    'id'=>1,
//                    'checkstatus'=>'未审核',
//                    'code'=>'学号',
//                    'name'=>'姓名',
//                    'status'=>'已提交',
//                    'dept'=>'数理系',
//                    'pro'=>'计科',
//                    'class'=>'计科N142',
//                    'classify'=>'职务',
//                    'sex'=>'女',
//                    'idcode'=>'330304199008134321',
//                    'ethnicity'=>'汉族',
//                    'contacts'=>'15757331245',
//                    'duanhao'=>'661245',
//                    'jiguan'=>'温州',
//                    'shengyuandi'=>'温州',
//                    'religious'=>'无',
//                    'politicalstatus'=>'共青团员',
//                    'addr'=>'浙江省嘉兴市南湖区',
//                    'guardian'=>'监护人',
//                    'guardiancontacts'=>'监护人联系方式',
//                    'building'=>'楼宇',
//                    'dormnumber'=>'学生寝室号',
//                    'bednumber'=>'床号',
//                    'remark'=>'备注',
//                ]
//            ]
//        ];
    }
}