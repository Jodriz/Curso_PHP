<?php
print("<h1>Day of week</h1>");
$num_day_of_week = "5";
switch ($num_day_of_week) {
    case 1:
        print("<h2>Sunday</h2>");
        break;
    case 2:
        print("<h2>Monday</h2>");
        break;
    case 3:
        print("<h2>Tuesday</h2>");
        break;
    case 4:
        print("<h2>Wednesday</h2>");
        break;
    case 5:
        print("<h2>Thursday</h2>");
        break;
    case 6:
        print("<h2>Friday</h2>");
        break;
    case 7:
        print("<h2>Saturday</h2>");
        break;
    default:
        print("<h2>There are only seven days on week.</h2>");
        break;
}