<?php

// Import data dari conflict
require_once "data/conflict.php";
use Data\One\Sample as Sample;
use Data\One\Dummy as Dummy;
use Data\Two\Conflict as ConflictTwo;

// Import data dari helper
require_once "data/helper.php"; 
use Helper as MyNamespaceHelper; // Menggunakan alias MyNamespaceHelper

// Buat object dari namespace yang dibuat
$SampleObject = new Sample();
$DummyObject = new Dummy();

// Tampilkan helper menggunakan echo
echo MyNamespaceHelper\APPLICATION . PHP_EOL;

// Panggil fungsi helpMe()
MyNamespaceHelper\helpMe();