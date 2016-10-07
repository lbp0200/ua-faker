<?php
/**
 * Created by IntelliJ IDEA.
 * User: lbp
 * Date: 16-10-5
 * Time: 下午6:33
 */

namespace lbp;


class UaFaker
{
    protected $ua = 'Mozilla/5.0 (Linux; Android 5.1.1; Nexus 6 Build/LYZ28E) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.23 Mobile Safari/537.36';

    public static function userAgent()
    {
        $i = mt_rand(0, 1);
        if ($i === 0) {
            return self::pc();
        } else {
            return self::mobile();
        }
    }

    public static function pc()
    {

    }

    public static function mobile()
    {
        if (mt_rand(0, 1) === 0) {
            return self::android();
        } else {
            return self::iphoneOrIpad();
        }
    }

    public static function android()
    {
        return Android::getUserAgent();
    }

    public static function iphoneOrIpad()
    {
        return Iphone::getUserAgent();
    }
}