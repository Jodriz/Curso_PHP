<?php 
$name_cookie = "Idiom";
$val = "es";
$time = time() + 60 * 60 * 24 * 30;
$path = "/";
$domain = "localhost";
$http_only = true;
$secure = false;
echo $time;
setcookie($name_cookie, $val, $time, $path, $domain);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Hello Cookies</h1>
    <h2><?php echo $_COOKIE["Idiom"]; ?></h2>
</body>
</html>