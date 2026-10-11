<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace yiiunit\framework\web\stubs;

use yii\base\Model;
use yii\web\UploadedFile;

class ModelStub extends Model
{
    public $id;
    public $title;
    public $hidden;
    /** @var UploadedFile|null */
    public $prod_image;
    /** @var UploadedFile[] */
    public $prod_images;
    /** @var UploadedFile|null */
    public $vendor_image;
    /** @var UploadedFile[] */
    public $vendor_images;
    /** @var UploadedFile|null */
    public $temp_image;
    /** @var UploadedFile|null */
    public $file;

    public function toArray(array $fields = [], array $expand = [], $recursive = true)
    {
        return ['id' => $this->id, 'title' => $this->title];
    }
}
