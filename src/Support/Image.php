<?php

namespace Sunnyday\Fileext\Support;

/**
 * Class Image
 * @package Sunnyday\Fileext\Support
 */
class Image {
    /**
     * 检查是否图片格式
     * @param $fileName
     * @return bool
     */
    public static function isImage($fileName) {
        // 定义检查的图片类型
        // $types = ['.gif', '.jpeg', '.jpg', '.png', '.bmp'];
        $types = ['image/gif', 'image/jpeg', 'image/png', 'image/bmp'];
        if (file_exists($fileName)) {
            $info = @getimagesize($fileName);
            return in_array($info['mime'], $types);
            // $ext = image_type_to_extension($info[2]);
        }
        return false;
    }
}