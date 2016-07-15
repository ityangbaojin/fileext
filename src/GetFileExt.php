<?php

namespace Sunnyday\Fileext;

class GetFileExt {
    // 获取文件真实扩展
    public static function getExt($file) {
        if (extension_loaded('fileinfo')) {
            $encoding = false;
            $fiObj = new \finfo($encoding ? FILEINFO_MIME : FILEINFO_MIME_TYPE);
            $mimeType = $fiObj->file($file);
            return $mimeType;
        }
        // 没fileinfon 扩展就用其它方式处理
        $command = 'file -I "' . realpath($file) . '"';
        $shellOutput = trim(shell_exec($command));
        $colonPosition = strpos($shellOutput, ':');
        $shellGetMimeType = (substr($shellOutput, $colonPosition + 1));
        return trim(explode(';', $shellGetMimeType)[0]);
    }
}