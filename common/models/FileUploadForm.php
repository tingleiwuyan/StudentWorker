<?php
// ////////////////////////////////////////////////////////////////////////////
//
// Copyright (c) 2015-2016 Hangzhou Freewind Technology Co., Ltd.
// All rights reserved.
// http://www.seastart.cn
//
// ///////////////////////////////////////////////////////////////////////////
namespace common\models;

use common\service\UploadService;
use common\util\Constants;
use yii\base\Model;
use yii\validators\FileValidator;
use yii\validators\ImageValidator;
use yii\web\UploadedFile;

/**
 * 文件上传
 *
 * @author Ather.Shu Dec 15, 2014 3:48:20 PM
 */
class FileUploadForm extends Model {

    public $type;

    /**
     * 上传的文件
     *
     * @var UploadedFile
     */
    public $file;

    private static $_useWantu = true;

    public function rules() {
        return [ 
            [ 
                [ 
                    'type',
                    'file' 
                ],
                'required' 
            ],
            [ 
                'type',
                'integer' 
            ],
            [ 
                'file',
                'validateFile' 
            ] 
        ];
    }

    public function validateFile() {
        $validator = new FileValidator();
        $validator->extensions =  [
            'jpg',
            'doc',
            'xls',
            'xlsx'
        ];
        $validator->checkExtensionByMimeType = false;
        // 700k
        $validator->maxSize = 10 * 1024 * 1024;
        $validator->validateAttribute($this, 'file');
    }

    public function save() {
        if( $this->validate() ) {
            $path = $this->innerSave();
            return $path;
        }
        return false;
    }



    private function innerSave() {
        $now = time() . mt_rand( 1, 10000 );
        $rand = substr( md5( $now ), 2, 2 );
        $path = "/res/upload/{$this->type}/{$rand}";
        $dir = \Yii::getAlias( '@frontend' ) . "/web{$path}";
        if( !file_exists( $dir ) ) {
            @mkdir( $dir, 0777, true );
        }
        $this->file->saveAs( "{$dir}/{$now}.{$this->file->extension}" );
        return $path . "/{$now}.{$this->file->extension}";
    }

}