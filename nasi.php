<?php

class LalapanBebek {
    public $namaMenu;
    public $harga;
    public $jumlah;

    // Constructor
    public function __construct($namaMenu, $harga) {
        $this->namaMenu = $namaMenu;
        $this->harga = $harga;
    }

    // Hitung total
    public function hitungTotal() {
        return $this->harga * $this->jumlah;
    }

    // Tampilkan hasil
    public function tampilkanPesanan() {
        echo "Menu       : " . $this->namaMenu . "<br>";
        echo "Harga      : Rp " . $this->harga . "<br>";
        echo "Jumlah     : " . $this->jumlah . "<br>";
        echo "Total Bayar: Rp " . $this->hitungTotal() . "<br>";
    }
}

// Input dari user
$jumlah = $_POST['jumlah'] ?? 0;

// Buat object
$bebek = new LalapanBebek("Lalapan Bebek Goreng", 25000);
$bebek->jumlah = $jumlah;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Lalapan Bebek</title>
</head>
<body>

<h2>Warung Lalapan Bebek 🦆</h2>

<form method="POST">
    Masukkan jumlah pesanan:
    <input type="number" name="jumlah" required>
    <button type="submit">Pesan</button>
</form>

<hr>

<?php
if ($jumlah > 0) {
    echo "<h3>Detail Pesanan</h3>";
    $bebek->tampilkanPesanan();
}
?>

</body>
</html>