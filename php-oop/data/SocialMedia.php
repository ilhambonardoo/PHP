<?php

/*
    Final CLASS dan Final FUNCTION
*/

class SocialMedia
{
    public string $name;
}

final class Facebook extends SocialMedia
{
    final public function login(string $username, string $password): bool
    {
        return  true;
    }
}

class FakeFacebook extends Facebook
{
    public function login(string $username, string $password): bool
    {
        return true;
    }
} //Error


/*
    Final class berguna untuk mengakhiri sebuah class agar tidak bisa di turunkan lagi.
    Final function berguna untuk mengakhiri sebuah funciton agar tidak bisa di override lagi.
    FInal Funciton ini sangat cocok untuk mengunci implementasi dari sebuah method agar tidak bisa diubah lagi oleh class childnya.
*/