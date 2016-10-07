<?php
/**
 * Created by IntelliJ IDEA.
 * User: lbp
 * Date: 16-10-7
 * Time: 下午6:21
 */

namespace lbp;


class LinuxPC
{
    protected static $linuxProcessor = array('i686', 'x86_64');

    protected static function getBuild()
    {
        $proc = self::$linuxProcessor[mt_rand(0, 1)];
        return "X11; Linux {$proc}";
    }

    public static function getUserAgent()
    {
        $build = self::getBuild();
        $chrome = WebBrowser::getChrome();
        return "Mozilla/5.0 ({$build}) {$chrome}";
    }
}