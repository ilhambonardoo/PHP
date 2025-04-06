<?php
$counter = 1;
while ($counter <= 10){
    echo "ini adalah for loop ke- $counter" . PHP_EOL; 
    $counter++;
}

echo PHP_EOL;

// syntax alternatif
$counter = 1;
while ($counter <= 11):
    echo "ini adalah for loop ke- $counter" . PHP_EOL; 
    $counter++;
endwhile;
?>