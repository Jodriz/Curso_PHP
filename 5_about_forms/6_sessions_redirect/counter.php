<?php 
session_name("LOGIN");
session_start();
if(isset($_SESSION["counter"])) {
    $_SESSION["counter"]++;
} else{
    $_SESSION["counter"] = 1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <?php echo session_id()?>
    <h1>Welcome <?php echo $_SESSION["username"]?> :)!</h1>
    <h2>Visit counter: <?php echo $_SESSION["counter"]?></h2>
    <br><br>
    <a href="index.php">Index</a>
    <br>
    <a href="close.php">Exit</a>
</body>
</html>