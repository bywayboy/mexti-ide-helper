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

    /**
     * GPS坐标转百度地图坐标
     */
    public static function wgs2bd($lat, $lng) : array {
        return ['lat'=>0, 'lng'=> 0];
    }

    /**
     * GPS坐标转国测局坐标
     */
    public static function wgs2gcj($lat, $lng) : array {
        return ['lat'=>0, 'lng'=> 0];
    }

    /**
     * 国测局坐标转GPS坐标
     */
    public static function gcj2wgs($lat, $lng) : array {
        return ['lat'=>0, 'lng'=> 0];
    }
}
