<?php
/**
 * Created by IntelliJ IDEA.
 * User: lbp
 * Date: 16-10-7
 * Time: 下午6:09
 */

namespace lbp;


class Iphone
{
    protected static $devices = array(
        'iPhone; CPU iPhone OS',
        'iPad; CPU OS'
    );

    public static function getUserAgent()
    {
        $device = self::$devices[mt_rand(0, 1)];
        $osVersion = mt_rand(3, 10);
        $builder = RandChar::getRandString();
        $browserVersion = WebBrowser::getSafariVersion();
        return "Mozilla/5.0 ({$device} {$osVersion}_1 like Mac OS X) AppleWebKit/{$browserVersion} (KHTML, like Gecko) Version/{$osVersion}.0 Mobile/{$builder} Safari/{$browserVersion}";
    }
}