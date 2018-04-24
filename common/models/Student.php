<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "Student".
 *
 * @property int $GUID 唯一码
 * @property string $school_code 学校编码
 * @property string $institude_code 学院编码
 * @property string $student_code 学号
 * @property string $student_name 姓名
 * @property int $student_state 状态
 * @property string $student_class 班级
 * @property int $student_sex 性别
 * @property string $idcard_num 身份证号码
 * @property string $student_post 职务
 * @property string $student_politicalstatus 政治面貌
 * @property string $student_religion 宗教信仰
 * @property string $student_nation 民族
 * @property string $student_nativeplace 籍贯
 * @property string $student_origin 生源地
 * @property string $building_code 楼号
 * @property string $dormitory_code 寝室号
 * @property string $bed_code 床号
 * @property string $student_tel 联系电话
 * @property string $student_cornet 短号
 * @property string $guardian_name 监护人
 * @property string $guardian_tel 监护人联系电话
 * @property string $student_address 家庭住址
 * @property string $student_photo 照片
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
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_code', 'institude_code', 'student_code', 'student_name', 'student_state', 'student_class', 'student_sex', 'idcard_num', 'student_post', 'student_politicalstatus', 'student_religion', 'student_nation', 'student_nativeplace', 'student_origin', 'building_code', 'dormitory_code', 'bed_code', 'student_tel', 'student_cornet', 'guardian_name', 'guardian_tel', 'student_address', 'student_photo', 'remarks'], 'required'],
            [['student_state', 'student_sex', 'create_time', 'update_time'], 'integer'],
            [['school_code', 'institude_code', 'student_code', 'building_code', 'dormitory_code', 'bed_code', 'student_photo', 'remarks'], 'string', 'max' => 255],
            [['student_name', 'student_class', 'idcard_num', 'student_post', 'student_politicalstatus', 'student_religion', 'student_tel', 'student_cornet', 'guardian_name', 'guardian_tel'], 'string', 'max' => 50],
            [['student_nation', 'student_nativeplace', 'student_origin', 'student_address', 'creater_name', 'updater_name'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'GUID' => 'Guid',
            'school_code' => 'School Code',
            'institude_code' => 'Institude Code',
            'student_code' => 'Student Code',
            'student_name' => 'Student Name',
            'student_state' => 'Student State',
            'student_class' => 'Student Class',
            'student_sex' => 'Student Sex',
            'idcard_num' => 'Idcard Num',
            'student_post' => 'Student Post',
            'student_politicalstatus' => 'Student Politicalstatus',
            'student_religion' => 'Student Religion',
            'student_nation' => 'Student Nation',
            'student_nativeplace' => 'Student Nativeplace',
            'student_origin' => 'Student Origin',
            'building_code' => 'Building Code',
            'dormitory_code' => 'Dormitory Code',
            'bed_code' => 'Bed Code',
            'student_tel' => 'Student Tel',
            'student_cornet' => 'Student Cornet',
            'guardian_name' => 'Guardian Name',
            'guardian_tel' => 'Guardian Tel',
            'student_address' => 'Student Address',
            'student_photo' => 'Student Photo',
            'remarks' => 'Remarks',
            'creater_name' => 'Creater Name',
            'create_time' => 'Create Time',
            'updater_name' => 'Updater Name',
            'update_time' => 'Update Time',
        ];
    }
}
