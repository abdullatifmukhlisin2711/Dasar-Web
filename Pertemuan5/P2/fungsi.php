<?php
function perkenalan($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
Perkenalan("Hamdana","Hallo");

echo "<hr>"

$saya = "Latif";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya, $ucapanSalam);
?>