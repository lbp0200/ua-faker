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

    protected static function getBuild()
    {
        $builder = 'Android ' .
            mt_rand(1, 7) . '.' . mt_rand(0, 4) . '.' . mt_rand(0, 3) . '; ' .
            self::$phoneNames[mt_rand(0, count(self::$phoneNames) - 1)] . ' Build/' . RandChar::getRandString() . ';';
        return $builder;
    }

    public static function getUserAgent()
    {
        $android = self::getBuild();
        $chrome = WebBrowser::getChrome();
        return "Mozilla/5.0 (Linux; {$android}) {$chrome}";
    }
}