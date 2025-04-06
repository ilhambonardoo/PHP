<?php

// DOUBLE QUOTE
echo "Name :";
echo 'Ilham Bonardo Marpaung';
echo "\n";

echo "Nama : ";
echo "Ilham\t Bonardo\t Marpaung\n \n";

// HEREDOC
echo <<<ILHAM
Ini adalah contoh string yang panjang, dan juga
gak perlu ngerik ENTER secara manual lagi. Selamat
Belajar PHP DASAR SEMOGA MENJADI ILMUNYA BERKAH.


ILHAM;

// NOWDOC -> Tidak bisa melakukan parsing
echo <<<'ILHAM'
Ini adalah contoh string yang panjang, dan juga
gak perlu ngerik ENTER secara manual lagi. Selamat
Belajar PHP DASAR SEMOGA MENJADI ILMUNYA BERKAH.
ILHAM;
