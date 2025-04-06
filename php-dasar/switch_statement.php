<?php 
$nilai = 'a';
switch ($nilai){
    case "A" || "a":
        echo "Anda Lulus dengan nilai sangat baik".PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus".PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus".PHP_EOL;
        break;
    default:
        echo "Anda SALAH JURUSAN".PHP_EOL;
}

// Syntax alternatif
switch ($nilai):
    case "A" || "a":
        echo "Anda Lulus dengan nilai sangat baik".PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus".PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus".PHP_EOL;
        break;
    default:
        echo "Anda SALAH JURUSAN".PHP_EOL;
endswitch;