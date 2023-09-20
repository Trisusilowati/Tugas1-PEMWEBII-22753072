<?php
include 'variabel.php';

//Gunakan variabel yang didefinisikan di variabel.php
echo "Nama: " . $nama . "<br>";
echo "umur : " . $umur . "<br>";

//Gunakan operator pada variabel
$umurSetahunLalu = $umur - 1 ;
echo "Umur satu tahun lalu: " . $umurSetahunLalu . " tahun <br>";

$umurTahunDepan = $umur + 1;
echo "Umur tahun depan : " . $umurTahunDepan . "tahun<br>";
