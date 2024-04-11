<?php 
function redirect($to){
    if(headers_sent()) {
        echo "<script> window.location.href='$to';</script>";
        return;
    }
    header("Location: $to");
}