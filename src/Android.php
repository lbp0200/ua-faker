<?php
/**
 * Created by IntelliJ IDEA.
 * User: lbp
 * Date: 16-10-5
 * Time: 下午6:51
 */

namespace lbp;


class Android
{
    protected static $phoneNames = [
        'Pixel C',
        'Nexus Player',
        'Nexus Q',
        'Nexus S',
        'Nexus 6P',
        'Nexus 5X',
        'Nexus 4',
        'Nexus 5',
        'Nexus 6',
        'Nexus 7',
        'Nexus 9',
        'Nexus 10',
    ];

    public static function getBuild()
    {
        $builder = 'Android ' .
            mt_rand(1, 7) . '.' . mt_rand(0, 4) . '.' . mt_rand(0, 3) . '; ' .
            self::$phoneNames[mt_rand(0, count(self::$phoneNames) - 1)] . ' Build/' . RandChar::getRandString() . ';';
        return $builder;
    }

    protected $ua = 'Mozilla/5.0 (Linux; Android 5.1.1; Nexus 6 Build/LYZ28E) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.23 Mobile Safari/537.36';
}