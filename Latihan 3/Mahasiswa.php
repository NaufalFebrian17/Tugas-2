<?php
class Mahasiswa
{
    //list of properties
    private $nim;
    private $nama;
    private $tgl_lahir;
    public $umur;

    //methods
    function setData($nim, $nama, $tgl_lahir)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tgl_lahir = $tgl_lahir;
        $this->setUmur();
    }
    function getData()
    {
        return [
            'nim' => $this->nim,
            'nama' => $this->nama,
            'tgl_lahir' => $this->tgl_lahir,
            'umur' => $this->umur,
        ];
    }

    public function setUmur() {
        $this->umur = date("Y") - substr($this->tgl_lahir, 0, 4);
    }
}