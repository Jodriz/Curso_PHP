<?php
include_once("util/util_redirect.php");
session_name("LOGIN");
session_start();
session_destroy();
redirect("index.php");