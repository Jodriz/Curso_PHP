<?php
$name_cookie = "Idiom";
$val = "es";
$time = time()-60 * 60 * 24 * 30;
$path = "/";
$domain = "localhost";
$http_only = true;
$secure = false;
echo $time;
setcookie($name_cookie, $val, $time, $path, $domain);