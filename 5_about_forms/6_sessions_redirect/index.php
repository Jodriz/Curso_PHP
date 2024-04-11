<?php 
session_name("LOGIN");
session_start();
include_once("util/util_regex.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <?php if(isset($_SESSION["counter"])):?>
        <h2>Visit counter: <?php echo $_SESSION["counter"]?></h2>
    <?php endif;?>
    <form action="login.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="" <?php echo get_cfg_text_input()?>>
        <br>
        <label for="pass">Password</label>
        <input type="password" name="pass" id="">
        <br><br>
        <button type="submit">Log in</button>
    </form>
</body>
</html>