<?php

namespace Sunnyday\Fileext;

/**
 * Class ShellExt
 * @package Sunnyday\Fileext
 */
class ShellExt implements ExtInterface {
    /**
     * shell 获取文件扩展(仅用linux mac)
     * @param $file
     * @return string
     */
    public static function getExt($file) {
        $command = 'file -I "' . realpath($file) . '"';
        $shellOutput = trim(shell_exec($command));
        $colonPosition = strpos($shellOutput, ':');
        $shellGetMimeType = (substr($shellOutput, $colonPosition + 1));
        return trim(explode(';', $shellGetMimeType)[0]);
    }
}