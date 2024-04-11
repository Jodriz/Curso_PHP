<?php
print("<h2>Use require for repeat.</h2>");
require("inc/to_import.php");
require("inc/to_import.php");
require("inc/to_import.php");
print("<h3>Script continue...</h3>");
print("<h2>Else, require_once:</h2>");
require_once("inc/to_import.php");
require_once("inc/to_import.php");
print("<h3>Script crash if path not exists:</h3>");
require_once("inc/path_false.php");
print("<h3>Script continue...</h3>");