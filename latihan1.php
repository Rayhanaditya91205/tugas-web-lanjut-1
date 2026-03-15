<?php
class Mahasiswa {
    public $nim;
    public $nama;
    public $jurusan;

    function tampilBiodata() {
        echo "=== Biodata Mahasiswa ===<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br><br>";
    }
}

// Objek pertama
$mhs1 = new Mahasiswa();
$mhs1->nim = "A11.2023.12345";
$mhs1->nama = "Rayhan";
$mhs1->jurusan = "Teknik Informatika";

// Objek kedua
$mhs2 = new Mahasiswa();
$mhs2->nim = "A11.2023.12346";
$mhs2->nama = "Budi";
$mhs2->jurusan = "Sistem Informasi";

// Objek ketiga
$mhs3 = new Mahasiswa();
$mhs3->nim = "A11.2023.12347";
$mhs3->nama = "Siti";
$mhs3->jurusan = "Teknik Komputer";

// Menampilkan biodata
$mhs1->tampilBiodata();
$mhs2->tampilBiodata();
$mhs3->tampilBiodata();

?>