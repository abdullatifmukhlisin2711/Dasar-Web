<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf A: ";
}elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90 ){
    echo "Nilai huruf B= ";
}elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf C= ";
}elseif ($nilaiNumerik < 70){
    echo "Nilai huruf D: ";
}

$jarakSaatini = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatini < $jarakTarget){
    $jarakSaatini += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;
for ($i = 1; $i <= $jumlahLahan; $i++){
   $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60){
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
 
}
    echo "Nilai: $nilai (Lulus) <br>"

$nilai_siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilai_siswa);

array_splice($nilai_siswa, 0, 2);
array_splice($nilai_siswa, -2);
$total_nilai = array_sum($nilai_siswa);
$jumlah_siswa = count($nilai_siswa);
$rata_rata = $total_nilai / $jumlah_siswa;

echo "Total nilai setelah mengabaikan nilai tertinggi dan terendah: ". $total_nilai . "\n";
echo "Rata-rata nilai: " . $rata_rata;

$hargaAwal = 120000;
$diskon = 20;
$jumlahDiskon = ($hargaAwal * $diskon) / 100;
$haegaAkhir = $hargaAwal - $jumlahDiskon;

echo "Harga setelah diskon: " . $haegaAkhir;



$skorPemain = 600;
if ($skorPemain > 500) {
    $hadiah = "YA";
} else {
    $hadiah = "TIDAK";
}
echo "Total skor pemain adalah: " . $skorPemain . "\n";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiah;
?>