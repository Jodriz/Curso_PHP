<?php

function now_date_fmt(string $fmt, string | null $date = null)
{
    if ($date === null) {
        $date_var = date($fmt);
    } else {
        $date_var = date($fmt, strtotime($date));
    }
    echo "($fmt): ";
    echo $date_var;
    echo "<br>";
}

date_default_timezone_set("America/Lima");
echo "DATE TEST";
echo "<br>";
$date_fmt = "Y-m-d";
now_date_fmt($date_fmt);
$date_fmt = "d-m-y";
now_date_fmt($date_fmt);
$date_fmt = "l d F Y";
now_date_fmt($date_fmt);
$date_fmt = "h:i a";
now_date_fmt($date_fmt);
$date_fmt = "H:i";
now_date_fmt($date_fmt);
$date_fmt = "l d F Y h:i A";
now_date_fmt($date_fmt);
$date_fmt = "Y-m-d";
now_date_fmt($date_fmt, "2023-05-14");
