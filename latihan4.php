<?php

class Mahasiswa {

    protected $nim;
    protected $nama;
    protected $jurusan;
    protected $status;

    function setData($nim,$nama,$jurusan){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }

    function getData(){
        echo "NIM : ".$this->nim."<br>";
        echo "Nama : ".$this->nama."<br>";
        echo "Jurusan : ".$this->jurusan."<br>";
        echo "Status : ".$this->status."<br>";
    }

}

class MahasiswaTransfer extends Mahasiswa {

    private $daftar_nilai;

    function __construct($nilai){

        $this->daftar_nilai = $nilai;

        $this->status = "Tidak Aktif";
    }

    function getIPK(){

        $total = array_sum($this->daftar_nilai);

        $jumlah = count($this->daftar_nilai);

        return $total / $jumlah;
    }

    function tampilData(){

        $this->getData();

        echo "IPK : ".round($this->getIPK(),2)."<br><br>";
    }

}

// Objek 1
$mahasiswa1 = new MahasiswaTransfer([3.5,3.7,3.8]);
$mahasiswa1->setData(
"A11.2023.12345",
"Rayhan",
"Teknik Informatika"
);
$mahasiswa1->tampilData();

// Objek 2
$mahasiswa2 = new MahasiswaTransfer([3.2,3.4,3.6]);
$mahasiswa2->setData(
"A11.2023.12346",
"Budi",
"Sistem Informasi"
);
$mahasiswa2->tampilData();

// Objek 3
$mahasiswa3 = new MahasiswaTransfer([3.6,3.8,3.9]);
$mahasiswa3->setData(
"A11.2023.12347",
"Siti",
"Teknik Komputer"
);
$mahasiswa3->tampilData();

// Objek 4
$mahasiswa4 = new MahasiswaTransfer([3.1,3.3,3.5]);
$mahasiswa4->setData(
"A11.2023.12348",
"Andi",
"Teknik Informatika"
);
$mahasiswa4->tampilData();