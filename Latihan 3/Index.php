<?php
include "Mahasiswa.php";

$mahasiswa_1 = new Mahasiswa();

$mahasiswa_1->setData('A11.2023.15026', 'Naufal Febrian', "2005-02-18");

echo "Umur dihitung dengan rumus : <br> ";
var_dump($mahasiswa_1->getData());
echo "<br>";
echo "<br> Nilai umur diberi langsung : <br> ";
$mahasiswa_1->umur = 100;
var_dump($mahasiswa_1->umur);
