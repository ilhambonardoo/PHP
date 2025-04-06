<?php 
goto a;
echo "Hello world". PHP_EOL;

a:
echo "Hello ilham". PHP_EOL;

// goto operator di LOOP
$counter = 1;
while (true){
    echo "Ini menggunakan BREAK".PHP_EOL;
    $counter++;

    if ($counter > 10){
        goto end;
    }
}

end:
echo "end loop";
?>
