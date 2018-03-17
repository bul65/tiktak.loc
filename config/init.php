<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CONF", ROOT . '/config');
//define("LAYOUT", 'watches');

// http://tiktak.loc/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
// http://tiktak.loc/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);

// http://tiktak.loc
$app_path = str_replace('/public/', '', $app_path);

define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

