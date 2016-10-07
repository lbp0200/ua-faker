<?php
/**
 * Created by IntelliJ IDEA.
 * User: lbp
 * Date: 16-10-5
 * Time: 下午10:11
 */

namespace lbp;


class RandChar
{
    protected static $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    protected static $charsArray = null;

    public static function getRandString($len = 6)
    {
        if (self::$charsArray === null) {
            self::$charsArray = str_split(self::$chars);
        }

        $arr = array();
        while (count($arr) < $len) {
            $arr[] = self::$charsArray[mt_rand(0, 35)];
        }
        return implode('', $arr);
    }
}