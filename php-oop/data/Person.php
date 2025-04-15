<?php

class Person
{

    const AUTHOR = "ORANG GANTENG";
    var string $name;
    var ?string $address; /* ? didepan tipe data ini untuk NULLABLE artinya dia properties ini bisa null atau tidak */
    var string $country = "Indonesia"; /* Default value */

    function __construct(string $name, ?string $address)
    {
        $this -> name = $name;
        $this -> address = $address;
    }  /* construct adalah function yang akan dipanggil saat pertama kali Object dibuat*/

    function __destruct()
    {
        echo "Object perseno {$this->name} is destroyed" .PHP_EOL;   
    }   /* Destruct adalah function yang akan dipanggil ketika object dihapus dari memory.
            Biasanya ini digunakan untuk menutup koneksi ke database atau menutup proses menulis file, 
            sehingga tidak terjadi memory leak */

    function sayHello(?string $name)
    {
        if (is_null($name)){
            echo "Hi, My name is $this->name" .PHP_EOL;
        }else {
            echo "Hello $name, My name is $this->name" .PHP_EOL;
        } /* this KEYWORD -> untuk mengakses object saat ini */
    }

    function info()
    {
        echo "Author : ". self::AUTHOR . PHP_EOL;
    } /* self KEYWORD -> untuk mengakses class yang sama*/

}

?>