<?php

namespace Sunnyday\Fileext;

// shell 获取文件扩展
class ShellExt implements ExtInterface {
    public static function getExt($file) {
        $command = 'file -I "' . realpath($file) . '"';
        $shellOutput = trim(shell_exec($command));
        $colonPosition = strpos($shellOutput, ':');
        $shellGetMimeType = (substr($shellOutput, $colonPosition + 1));
        return trim(explode(';', $shellGetMimeType)[0]);
    }
}