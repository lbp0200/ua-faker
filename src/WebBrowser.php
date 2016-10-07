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
        $r1 = mt_rand(1, 99);
        $r2 = mt_rand(0, 9);
        return "Chrome/48.0.2564.23";
    }
}