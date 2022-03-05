<?php
// membuat variabel
$name = "Rizal Saefulloh";
$age = 19;
$weight = 54.9;

// menampilakn variabel
echo "Name : " . $name;
echo "<br>Age : $age";
echo "<br>Weight : $weight";

// menampilkan variable sistem
echo "<br>Dokumen Root : " . $_SERVER['DOCUMENT_ROOT'];
echo "<br>Nama File : " . $_SERVER['PHP_SELF'];

// membuat variabel constanta
define('PHI', 3.14);
$r = 10;
$luas = PHI * $r * $r;
echo "<br>Luas Lingkaran : $luas";