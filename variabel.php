<?php
//  variabel dan type data

// variabel 
// tidak boleh diawali angka, tapi boleh mengandung angka
$nama = "Irsyadi Hanif Elnur";

echo "Hallo, nama saya $nama";

// Operator aritmatika
// + - / * %

// penggabung string / concatenation / concat
// .

$namaDepan = "Irsyadi";
$namaBelakang = "Elnur";

echo "<br />";
echo $namaDepan . " " . $namaBelakang;


// assignment
// =, +=, -=, *=, /=, %=, .=

echo "<br />";
$x = 1;
$x += 5;

echo $x;
// maka hasilnya akan menjadi 6 bukan 5

// operator perbandingan
//  <, > , <=, >=, ==, !=

echo "<br />";
var_dump(1 < 5);

// identitas
// ===, !==
// dicek juga type datanya

// operator Logika
//  &&, ||, !
// dipakai untuk pengkondisian
echo "<br />";
var_dump($x < 20 && $x > 6);

?>