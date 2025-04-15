<?php

require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";
require_once "exception/ValidationException.php";
require_once "helper/ReflectionHelper.php";


$request = new LoginRequest();
$request->username = "Ilham";
$request->password = "wkwkwk";

// ValidationUtil::validate($reflection);

ValidationUtil::validateReflection($request);

class RegisterRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterRequest();
$register->name = "Ilham Bonardo Marpaung";
$register->address = "Jl.RAYA";
$register->email = "ilhambonardo123@kons.com";


ValidationUtil::validateReflection($register);


class UserRequest
{
    public string $name;
    public int $age;
    public ?string $email;

    public function __construct(string $name, int $age, ?string $email = null)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }
}

$data = [
    'name' => 'Ilham',
    'age' => 22,
    'email' => 'ilham@wkwkwk.com'
];

$user = ReflectionHelper::newInstance(UserRequest::class, $data);

echo "\nObject hasil instansiasi otomatis:\n";
print_r($user);
