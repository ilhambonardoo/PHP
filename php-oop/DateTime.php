<?php


$date_time = new DateTime();
$date_time->setDate(2004, 12, 06);
$date_time->setTime(10, 10, 10, 0);

$date_time->add(new DateInterval("P1Y")); /* Ini untuk menambah tahun */

$minusOnemonth = new DateInterval("P1M");
$minusOnemonth->invert = true; /* Ini untuk mengurangi tahun */
$date_time->add($minusOnemonth);

var_dump($date_time);


$date_now = new DateTime();
$date_now->setTimezone(new DateTimeZone("Asia/Makassar"));
var_dump($date_now);

$format_string = $date_now->format("Y-F-d H:i:v"); // Untk mengubah waktu menjadi string

echo "Waktu saat ini : $format_string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-F-d H:i:v", "2025-March-29 23:59:23", new DateTimeZone("Asia/Jakarta"));
// Ini untuk mengubah string menjadi waktu sesuai format yang dibuat
var_dump($date);
