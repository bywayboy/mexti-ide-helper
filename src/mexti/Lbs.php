<?php
declare(strict_types=1);

namespace mexti;

/**
 * LBS 转换函数
 */
class Lbs{

    /**
     * 百度地图转GPS坐标
     */
    public static function bd2wgs($lat, $lng) : array {
        return ['lat'=>0, 'lng'=> 0];
    }
}