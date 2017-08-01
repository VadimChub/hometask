<?php
// $s - длинна участка в км
$s = 100;
// $t - время в часах
$t = 2;
// $speed_km - скорость в км/ч на даном участке
$speed_km = $s/$t;

echo "$speed_km km/h </br>";
// $speed_m - скорость в м/сек на даном участке
$speed_m = ($s*1000)/($t*3600);

echo "$speed_m m/sec";