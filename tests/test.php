<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use lbp\SayHello;

//echo SayHello::world().PHP_EOL;

//echo mt_rand(4,5).PHP_EOL;
echo \lbp\Android::getBuild().PHP_EOL;