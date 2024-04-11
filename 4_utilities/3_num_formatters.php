<?php
$num = 2355.283747;
echo "Original number: $num";
echo "<br>";
echo "NUM_FMT ";
echo "<br>";
$str_num = number_format($num);
echo "(num): ";
echo $str_num;
echo "<br>";
$str_num = number_format($num,2);
echo "(num, 2): ";
echo $str_num;
echo "<br>";
$str_num = number_format($num,1);
echo "(num, 1): ";
echo $str_num;
echo "<br>";
$str_num = number_format($num,2, ",");
echo "(num, 2, ','): ";
echo $str_num;
echo "<br>";
$str_num = number_format($num,2, ",", "_");
echo "(num, 2, ',', '_'): ";
echo $str_num;
echo "<br>";