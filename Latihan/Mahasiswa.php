<?php
class Mahasiswa
{
    //list of properties
    private $nim;
    private $nama;
    //methods
    function setData($nim, $nama)
    {
        $this->nim = $nim;
        $this->nama = $nama;
    }
    function getData()
    {
        return [
            'nim' => $this->nim,
            'nama' => $this->nama,
        ];
    }
}