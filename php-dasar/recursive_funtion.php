<?php
function factorialRecursive(int $value):int{
    if($value == 1){
        return 1;
    } else{
        return $value * factorialRecursive($value - 1);
    }
};
echo factorialRecursive(8);
?>