<?php
include "Mahasiswa.php";
$mahasiswa_1 = new Mahasiswa();
$mahasiswa_2 = new Mahasiswa();

$mahasiswa_1->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');
$mahasiswa_2->setData('A12.2000.00001', 'Junior', 'Sistem Informasi');
// print_r($mahasiswa_1->getData());

echo "Data Mahasiswa: <br>";
$mahasiswa_1->printData();
$mahasiswa_2->printData();