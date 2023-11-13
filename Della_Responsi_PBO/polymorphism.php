<?php

require_once "data/programmer.php";

$company = new Company();
$company->programmer = new Programmer("Adel");
var_dump($company);

$company->programmer = new BackendProgrammer("Adel");
var_dump($company);

$company->programmer = new FrontendProgrammer("Adel");
var_dump($company);

sayHelloProgrammer(new Programmer("Adel"));
sayHelloProgrammer(new BackendProgrammer("Adel"));
sayHelloProgrammer(new FrontendProgrammer("Adel"));