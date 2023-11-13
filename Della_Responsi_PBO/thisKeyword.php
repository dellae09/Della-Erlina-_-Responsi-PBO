<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$alzah = new Person("Della", "Bengkulu");

// tambahkan value nama di object
$alzah->nama = "Della";

// panggil function sayHelloNull dengan parameter
$alzah->sayHelloNull("Kic");

// buat object dari kelas person
$fariski = new Person("Elina", "Linggau");

// tambahkan value nama di object
$fariski->nama = "Alina";

// panggil function sayHelloNull dengan parameter null
$fariski->sayHelloNull(null);
