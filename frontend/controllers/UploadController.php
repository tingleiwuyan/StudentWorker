<?php
// ////////////////////////////////////////////////////////////////////////////
//
// ATHER.SHU WWW.ASAREA.CN
// All Rights Reserved.
// email: shushenghong@gmail.com
//
// ///////////////////////////////////////////////////////////////////////////
namespace frontend\controllers;

use common\models\FileUploadForm;
use common\util\Constants;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\UploadedFile;

/**
 * 图片上传
 *
 * @author Ather.Shu May 12, 2015 2:29:34 PM
 */
class UploadController extends Controller {

    public $enableCsrfValidation = false;

    public function behaviors() {
        return [
            'verbs' => [ 
                'class' => VerbFilter::className(),
                'actions' => [ 
                    'index' => [ 
                        'post' 
                    ],
                    'ck-upload' => [ 
                        'post' 
                    ] 
                ] 
            ] 
        ];
    }

    /**
     * 上传文件
     */
    public function actionIndex() {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $model = new FileUploadForm();
        if( \Yii::$app->request->isPost ) {
            $model->file = UploadedFile::getInstanceByName( 'fu_UploadFile' );
            $model->type = 1;
            $savedPath = $model->save();
            if( $savedPath ) {
                return array (
                    'code'=>200,
                    'url' => $savedPath 
                );
            }
            else {
                return array (
                    'code'=>500,
                    'error' => $model->getErrors() 
                );
            }
        }
    }

    /**
     * ckeditor upload
     */
}