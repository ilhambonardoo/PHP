<?php
// Tanpa FOR EACH
echo "Tanpa FOR EACH";
echo PHP_EOL;

$names = ["Ilham","Bonardo","Marpaung"];

for ($i = 0; $i<count($names); $i++){
    echo "Ini merupakan names ke $i = $names[$i]". PHP_EOL;
}

echo PHP_EOL;
echo "Menggunakan FOR EACH";
echo PHP_EOL;

// Menggunakan FOR EACH
$names = ["Ilham","Bonardo","Marpaung"];

foreach ($names as $name){
    echo "Hello ini data $name" .PHP_EOL;
}

echo PHP_EOL;

foreach ($names as $index => $name){
    echo "Hello ini data ke $index = $name" .PHP_EOL;
}

echo PHP_EOL;

// For Each dengan KEY
$person = [
    "First Name"=>"Ilham", 
    "Middle Name"=>"Bonardo", 
    "Last Name" => "Marpaung"
];

foreach ($person as $key => $value){
    echo "$key => $value" . PHP_EOL;
}

?>