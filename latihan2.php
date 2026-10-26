<?php

class Pengguna {

public $nama;
public $email;

public function tampilkanData() {
    echo "Nama: " . $this->nama . "<br>";
    echo "Email: " . $this->email . "<br>";
}
}
class Mahasiswa extends Pengguna {
public $nim;
public $prodi;
}
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Budi";
$mahasiswa1->email = "budi@example.com";
$mahasiswa1->nim = "123456";
$mahasiswa1->prodi = "Teknik Informatika";
$mahasiswa1->tampilkanData();

echo "NIM: " . $mahasiswa1->nim . "<br>";
echo "Program Studi: " . $mahasiswa1->prodi . "<br>";
?>
