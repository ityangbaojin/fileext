<?php

namespace Sunnyday\Fileext;
use Sunnyday\Fileext\Support\Image;

/**
 * Class ExifExt
 * @package Sunnyday\Fileext
 */
class ExifExt implements ExtInterface {
    /**
     * 获取图像类型 (不支持文件)
     * @param $file
     * @return string
     */
    public static function getExt($file) {
        // 需要开启 php_mbstring php_exif 扩展
        if (! function_exists('exif_imagetype')) {
            return false;
        }
        // 是否图片格式
        if (Image::isImage($file)) {
            return image_type_to_mime_type(exif_imagetype($file));
        }
        return false;
    }
}