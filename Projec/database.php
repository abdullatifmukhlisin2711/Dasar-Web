<?php
$dsn = "sqlsrv:server=ABDUL\SQLEXPRESS;database=TokoMobil";
$conn;
try {
    $conn = new PDO($dsn); //Menyambungkan ke library PDO
} catch (PDOException $e) {
    echo $e;
}

?>