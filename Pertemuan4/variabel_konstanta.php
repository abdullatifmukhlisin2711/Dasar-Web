<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil\n";
$benar = true;
$salah = false;
echo "Variabel benar: $benar\n";
echo "Variabel salah: $salah\n";

//Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);
echo "Selamat datang di " . NAMA_SITUS . ", situng yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".\n";
?>