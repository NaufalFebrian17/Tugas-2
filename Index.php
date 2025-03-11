<?php
include "Mahasiswa.php";
include "MataKuliah.php";
$mahasiswa_1 = new Mahasiswa();
$matkul_1 = new MataKuliah();

$mahasiswa_1->setData('A11.2023.15026', 'Naufal Febrian');
$matkul_1->setData('A11.1234', 'Pemrograman Web Lanjut');

var_dump($mahasiswa_1->getData());
echo "<br>";
var_dump($matkul_1->getData());