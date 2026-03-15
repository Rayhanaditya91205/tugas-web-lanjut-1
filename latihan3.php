<?php
class Mahasiswa {

    private $nim;
    private $nama;
    private $jurusan;
    private $umur;

    // setter
    function setData($nim, $nama, $jurusan){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }

    function setUmur($tahun_lahir){
        $tahun_sekarang = date("Y");
        $this->umur = $tahun_sekarang - $tahun_lahir;
    }

    // getter
    function tampilBiodata(){
        echo "=== Biodata Mahasiswa ===<br>";
        echo "NIM : ".$this->nim."<br>";
        echo "Nama : ".$this->nama."<br>";
        echo "Jurusan : ".$this->jurusan."<br>";
        echo "Umur : ".$this->umur."<br><br>";
    }

}

// objek pertama
$mhs1 = new Mahasiswa();
$mhs1->setData("A11.2023.12345","Rayhan","Teknik Informatika");
$mhs1->setUmur(2004);

// objek kedua
$mhs2 = new Mahasiswa();
$mhs2->setData("A11.2023.12346","Budi","Sistem Informasi");
$mhs2->setUmur(2003);

// objek ketiga
$mhs3 = new Mahasiswa();
$mhs3->setData("A11.2023.12347","Siti","Teknik Komputer");
$mhs3->setUmur(2002);

// tampilkan data
$mhs1->tampilBiodata();
$mhs2->tampilBiodata();
$mhs3->tampilBiodata();

?>