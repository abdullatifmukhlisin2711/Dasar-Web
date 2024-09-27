<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$lebihKecilAtauSama = $a <= $b;
$lebihBesarAtauSama = $a >= $b; 
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "$hasilIdentik <br>";
echo "$hasilTidakIdentik  <br>";
echo "$a += $b <br>";
echo "$a -= $b <br>";
echo "$a *= $b <br>";
echo "$a /= $b <br>";
echo "$hasilAnd <br>";
echo "$hasilOr <br>";
echo "$hasilNotA <br>";
echo "$hasilNotB<br>";
echo "$hasilSama <br>";
echo "$hasilTidakSama <br>";
echo "$hasilLebihKecil <br>";
echo "$hasilLebihBesar <br>";
echo "$lebihKecilAtauSama <br>";
echo "$lebihBesarAtauSama";
echo "$hasilTambah <br>";
echo "$hasilKurang <br>";
echo "$hasilKali <br>";
echo "$hasilBagi <br>";
echo "$sisaBagi <br>";
echo "$pangkat <br>";


$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;
$persenKosong = ($kursiKosong / $totalKursi) * 100;
echo "Persentase kursi yang masih kosong adalah: " . $persenKosong . "%";
?>
