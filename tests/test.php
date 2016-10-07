<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use lbp\WebBrowser;

//echo SayHello::world().PHP_EOL;

//echo mt_rand(4,5).PHP_EOL;
echo \lbp\Android::getUserAgent() . PHP_EOL;
echo \lbp\Iphone::getUserAgent() . PHP_EOL;
foreach (range(0, 5) as $item) {
    echo \lbp\LinuxPC::getUserAgent() . PHP_EOL;
}