<?php

namespace Sunnyday\Fileext;

/**
 * Class FInfoExt
 * @package Sunnyday\Fileext
 */
class FInfoExt implements ExtInterface {
    /**
     * fileinfo扩展 获取文件扩展
     * @param $file
     * @param bool|false $encoding
     * @return bool|string
     */
    public static function getExt($file, $encoding = false) {
        if (extension_loaded('fileinfo')) {
            $fiObj = new \finfo($encoding ? FILEINFO_MIME : FILEINFO_MIME_TYPE);
            $mimeType = $fiObj->file($file);
            return $mimeType;
        }
        return false;
    }
}