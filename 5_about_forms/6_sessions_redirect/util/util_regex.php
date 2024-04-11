<?php 
include_once("util_redirect.php");
function get_cfg_text_input($min=3, $max=10){
    return "patern='[a-zA-Z]{".$min.",".$max."}' maxlength='$max'";
}

function validate_text($text, $min=3, $max=10){
    if (!preg_match("/^[a-zA-Z]{".$min.",".$max."}$/", $text)){
        print("FAILED");
        redirect("./index.php");
        exit();
    }
    print("PIOLA");
}