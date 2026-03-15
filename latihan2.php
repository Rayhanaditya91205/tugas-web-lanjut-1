<?php
class Mahasiswa {
    private $nim;     
    public $nama;     
    public $jurusan;

    function setNim($nim){
        $this->nim = $nim;
    }

    function tampilBiodata() {
        echo "=== Biodata Mahasiswa ===<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br><br>";
    }
}

// Objek pertama
$mhs1 = new Mahasiswa();
$mhs1->setNim("A11.2023.12345");
$mhs1->nama = "Rayhan";
$mhs1->jurusan = "Teknik Informatika";

// Objek kedua
$mhs2 = new Mahasiswa();
$mhs2->setNim("A11.2023.12346");
$mhs2->nama = "Budi";
$mhs2->jurusan = "Sistem Informasi";

// Objek ketiga
$mhs3 = new Mahasiswa();
$mhs3->setNim("A11.2023.12347");
$mhs3->nama = "Siti";
$mhs3->jurusan = "Teknik Komputer";

// Menampilkan data
$mhs1->tampilBiodata();
$mhs2->tampilBiodata();
$mhs3->tampilBiodata();
?>