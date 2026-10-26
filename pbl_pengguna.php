<?php
class Pengguna {
    protected $nama;
    protected $email;

    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email;
    }
    
    public function tampilkanPeran() {
        echo "peran : Pengguna";
    }
}

class Mahasiswa extends Pengguna {
    private $nim;
    private $prodi;

    public function __construct($nama, $email, $nim, $prodi) {
        parent::__construct($nama, $email);
        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function tampilkanData() {
        parent::tampilkanData();
        echo "<br>NIM: " . $this->nim . "<br>";
        echo "Prodi: " . $this->prodi;
    }
    
    public function tampilkanPeran() {
        echo "peran : Mahasiswa";
    }
}

class Dosen extends Pengguna {
    private $nidn;
    private $bidangKeahlian;

    public function __construct($nama, $email, $nidn, $bidangKeahlian) {
        parent::__construct($nama, $email);
        $this->nidn = $nidn;
        $this->bidangKeahlian = $bidangKeahlian;
    }

    public function tampilkanData() {
        parent::tampilkanData();
        echo "<br>NIDN: " . $this->nidn;
        echo "<br>Bidang Keahlian: " . $this->bidangKeahlian;
    }
    
    public function tampilkanPeran() {
        echo "peran : Dosen";
    }
}

$mhs = new Mahasiswa("Budi", "budi@example.com", "123456", "Teknik Informatika");
$dosen = new Dosen("Dr. John", "john@example.com", "789012", "Machine Learning");

echo "<h2>Data Mahasiswa</h2>";
$mhs->tampilkanData();
$mhs->tampilkanPeran();

echo "<h2>Data Dosen</h2>";
$dosen->tampilkanData();
$dosen->tampilkanPeran();
?>
