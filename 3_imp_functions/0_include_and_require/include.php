<?php
print("<h2>Use include for repeat.</h2>");
include("inc/to_import.php");
include("inc/to_import.php");
include("inc/to_import.php");
print("<h3>Script continue...</h3>");
print("<h2>Else, include_once:</h2>");
include_once("inc/to_import.php");
include_once("inc/to_import.php");
include_once("inc/to_import.php");
print("<h3>Script continue...</h3>");