<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Student".
 *
 * @property int $GUID 唯一码
 * @property string $institude_name 学院
 * @property string $grades 年级
 * @property string $student_class 行政班
 * @property string $student_code 学号
 * @property string $student_name 姓名
 * @property int $student_sex 性别
 * @property string $student_politicalstatus 政治面貌
 * @property string $student_nation 民族
 * @property string $student_post 职务
 * @property string $student_tel 手机长号
 * @property string $student_cornet 短号
 * @property string $student_address 家庭住址
 * @property string $guardian_name 家长姓名
 * @property string $guardian_tel 家长联系电话
 * @property string $idcard_num 身份证号码
 * @property string $remarks 备注信息
 * @property string $creater_name 创建人
 * @property int $create_time 创建时间
 * @property string $updater_name 修改人
 * @property int $update_time 修改时间
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['institude_name', 'grades', 'student_class', 'student_code', 'student_name', 'student_sex', 'student_politicalstatus', 'student_nation', 'student_post', 'student_tel', 'student_cornet', 'student_address', 'guardian_name', 'guardian_tel', 'idcard_num'], 'required'],
            [['student_sex', 'create_time', 'update_time'], 'integer'],
            [['institude_name', 'grades', 'student_class', 'student_code', 'remarks' ,'student_address'], 'string', 'max' => 255],
            [['student_name', 'student_politicalstatus', 'student_post', 'student_tel', 'student_cornet', 'guardian_name', 'guardian_tel', 'idcard_num'], 'string', 'max' => 50],
            [['student_nation', 'creater_name', 'updater_name'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'GUID' => '唯一码',
            'institude_name' => '学院',
            'grades' => '年级',
            'student_class' => '行政班',
            'student_code' => '学号',
            'student_name' => '姓名',
            'student_sex' => '性别',
            'student_politicalstatus' => '政治面貌',
            'student_nation' => '民族',
            'student_post' => '职务',
            'student_tel' => '手机长号',
            'student_cornet' => '短号',
            'student_address' => '家庭住址',
            'guardian_name' => '家长姓名',
            'guardian_tel' => '家长联系电话',
            'idcard_num' => '身份证号码',
            'remarks' => '备注信息',
            'creater_name' => '创建人',
            'create_time' => '创建时间',
            'updater_name' => '修改人',
            'update_time' => '修改时间',
        ];
    }

    public function fields()
    {
        return [
            'id'=>'GUID',
            'checkstatus'=>function(){
                return '暂无数据';
            },
            'code'=>'student_code',
            'name'=>'student_name',
            'status'=>function(){
                return '暂无数据';
            },
            'dept'=>'institude_name',
            'pro'=>function(){
                return '暂无数据';
            },
            'class'=>'student_class',
            'classify'=>'student_post',
            'sex'=>'student_sex',
            'idcode'=>'idcard_num',
            'ethnicity'=>'student_nation',
            'contacts'=>'student_tel',
            'duanhao'=>'student_cornet',
            'jiguan'=>function(){
                return '暂无数据';
            },
            'shengyuandi'=>function(){
                return '暂无数据';
            },
            'religious'=>function(){
                return '暂无数据';
            },
            'politicalstatus'=>'student_politicalstatus',
            'addr'=>'student_address',
            'guardian'=>'guardian_name',
            'guardiancontacts'=>'guardian_tel',
            'building'=>function(){
                return '暂无数据';
            },
            'dormnumber'=>function(){
                return '暂无数据';
            },
            'bednumber'=>function(){
                return '暂无数据';
            },
            'remark'=>'remarks',
        ];
    }
}
