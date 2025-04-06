<?php

// $a && $b --> AND --> True jika $a dan $b keduanya true
// $a and $b --> AND --> True jika $a dan $b keduanya true
// $a || $b --> OR --> True jika $a dan $b salah satunya true atau keduanya true
// $a or $b --> OR --> True jika $a dan $b salah satunya true atau keduanya true
// !$a --> NOT --> True jika $a false
// $a xor $b --> XOR --> True jika $a dan $b salah satunya true tetapi tidak keduanya

var_dump(true && true);
var_dump(true && false);

echo "\n";

var_dump(true || true);
var_dump(true || false);
var_dump(false || false);

echo "\n";


var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor false);

echo "\n";

var_dump(!true);
