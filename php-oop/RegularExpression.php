<?php

// Regullar Expression Match
$matches = [];

$result = (bool)preg_match_all("/ilham|bon|Mar/i", "Ilham Bonardo Marpaung", $matches);

var_dump($result);
var_dump($matches);


// Regular Expression Replace
$result = preg_replace("/anjing|bangsat/i", "*****", "dasar lu anjing dan bangsat");

var_dump($result);


// Regular Expression Split
$result = preg_split("/[\s,-]/", "Ilham Bonardo Marpaung,Sekolah Vokasi IPB-University");

var_dump($result);


/**
 * Catatan untuk regular expression *
 * preg_match($pattern, $subject) -> digunakan untuk mencari match pattern.
 * preg_replace($pattern, $replacement, $subject) -> digunakan untuk merplace semua pattern dengan replacement.
 * preg_split($pattern, $subject) -> digunakan untuk memotong dengan pattern menjadi array.
 */
