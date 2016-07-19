<?php

namespace Sunnyday\Fileext;

interface ExtInterface {
    /**
     * 获取文件MIMETYPE
     * @param $file
     * @return string
     */
    public static function getExt($file);
}