<?php

namespace Sunnyday\Fileext;

// fileinfo扩展 获取文件扩展
class FInfoExt implements ExtInterface {
    // 获取文件真实扩展
    public static function getExt($file, $encoding = false) {
        if (extension_loaded('fileinfo')) {
            $fiObj = new \finfo($encoding ? FILEINFO_MIME : FILEINFO_MIME_TYPE);
            $mimeType = $fiObj->file($file);
            return $mimeType;
        }
        return false;
    }
}