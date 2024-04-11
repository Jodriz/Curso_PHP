<?php
$date_1 = "2023/11/03";
$date_2 = "2023-10-08";
$nums = "One, Two, Three";
$arr_data = explode("/", $date_1);
echo "[".implode(", ", $arr_data)."]";
echo "<br>";
$arr_data = explode("-", $date_2);
echo "[".implode(", ", $arr_data)."]";
echo "<br>";
$arr_data = explode("-", $nums);
echo "[".implode(", ", $arr_data)."]";
echo "<br>";
