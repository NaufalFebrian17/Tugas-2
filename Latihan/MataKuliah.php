<?php
class MataKuliah
{
    //list of properties
    private $kode;
    private $nama;

    //methods
    function setData($kode, $nama)
    {
        $this->kode = $kode;
        $this->nama = $nama;
    }
    function getData()
    {
        return [
            'kode' => $this->kode,
            'nama' => $this->nama,
        ];
    }
}