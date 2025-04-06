<?php
// BREAK
$counter = 1;
while (true){
    echo "Ini menggunakan BREAK".PHP_EOL;
    $counter++;

    if ($counter > 10){
        break;
    }
}

echo PHP_EOL;

// Continue
for ($counter = 1; $counter <=100; $counter ++){
    if ($counter % 2 == 0){
        continue;
    }
    echo "Counter : ".$counter .PHP_EOL ;   
}
?>