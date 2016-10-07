<?php
/**
 * Created by IntelliJ IDEA.
 * User: lbp
 * Date: 16-10-6
 * Time: 下午9:53
 */

namespace lbp;


class WebBrowser
{
    public static function getChrome()
    {
        $sfv = self::getSafariVersion();
        $r1 = mt_rand(1, 99);
        $r2 = mt_rand(0, 9);
        $r3 = mt_rand(0, 9999);
        $r4 = mt_rand(1, 99);
        return "AppleWebKit/$sfv (KHTML, like Gecko) Chrome/{$r1}.{$r2}.{$r3}.{$r4} Mobile Safari/$sfv";
    }

    public static function getSafariVersion()
    {
        return mt_rand(1, 999) . '.' . mt_rand(1, 99);
    }
}