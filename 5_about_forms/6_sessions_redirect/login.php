<?php
include_once("util/util_redirect.php");
include_once("util/util_regex.php");
function validate_session($user, $pass){
    $not_empty = isset($user) and isset($pass);
    if(!$not_empty) {
        redirect("index.php");
        return;
    }
    $userfromdb = "Jos";
    $passfromdb = "";
    validate_text($user);
    $approved_session = $userfromdb===$user && $passfromdb===$pass;
    if(!$approved_session) {
        redirect("index.php");
        return;
    }
    session_name("LOGIN");
    session_start();
    $_SESSION["username"] = $user;
    redirect("counter.php");
}
if (isset($_SESSION["LOGIN"])){
    redirect("counter.php");
    return;
}
$pass = $_POST["pass"];
$username = $_POST["username"];
validate_session($username, $pass);