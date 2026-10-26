<?php
class pengguna{

    public function tampilkanPeran() {
        echo "peran : Pengguna sistem informasi";
    }
}

class Mahasiswa extends pengguna {

public function tampilkanPeran() {
        echo "peran : Mahasiswa";
    }
}

class Dosen extends pengguna {

public function tampilkanPeran() {
        echo "peran : Dosen";
    }
}

$mhs = new Mahasiswa();
$dosen = new Dosen();

$mhs->tampilkanPeran();

echo "<br>";
$dosen->tampilkanPeran();
?>