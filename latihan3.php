<?php

class pengguna {
    public $nama;
    public $email;

    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}

class Mahasiswa extends pengguna {
    public $nim;
    public $prodi;

    public function __construct($nama, $email, $nim, $prodi) {
        parent::__construct($nama, $email);
        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function tampilkanDataMahasiswa() {
        $this->tampilkanInfo();
        echo "NIM: " . $this->nim . "<br>";
        echo "Program Studi: " . $this->prodi . "<br>";
    }
}

$mahasiswa1 = new Mahasiswa("Budi", "budi@example.com", "123456", "Teknik Informatika");
$mahasiswa1->tampilkanDataMahasiswa();
?>