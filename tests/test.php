<?php

require_once __DIR__ . '../../vendor/autoload.php';

// fileinfo扩展 获取
var_dump(\Sunnyday\Fileext\FInfoExt::getExt('./1'));
echo '<hr />';
// shell扩展 获取
var_dump(\Sunnyday\Fileext\ShellExt::getExt('./1'));
echo '<hr />';
//exif扩展 获取(不支持文件)
var_dump(\Sunnyday\Fileext\ExifExt::getExt('./123.jpg'));