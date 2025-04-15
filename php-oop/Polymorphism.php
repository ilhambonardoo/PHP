<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Ilham");
var_dump ($company);
$company->programmer = new BackendProgrammer("Ilham");
var_dump ($company);
$company->programmer = new FrontendProgrammer("Ilham");
var_dump ($company);

sayHelloProgrammer(new Programmer("Ilham"));
sayHelloProgrammer(new BackendProgrammer("Ilham"));
sayHelloProgrammer(new FrontendProgrammer("Ilham"));