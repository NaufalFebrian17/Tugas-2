<?php
class Mahasiswa
{
    //list of properties
    protected $nim, $nama, $tgl_lahir, $umur, $status;

    public function __construct() {
        $this->status = 'Aktif';
    }

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