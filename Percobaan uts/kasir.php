<?php

$servername = "localhost";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdatabase";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST["product_id"];
    $quantity = $_POST["quantity"];

    $sql = "SELECT price FROM products WHERE id = $product_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $price = $row["price"];

    $total = $quantity * $price;

    echo "Total harga: Rp " . number_format($total, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Kasir Sederhana</title>
</head>
<body>
    <form method="post">
        <label for="product_id">Pilih Produk:</label>
        <select name="product_id" id="product_id">
            <?php
            while($row = $result->fetch_assoc()) {
                echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
            }
            ?>
        </select>
        <br>
        <label for="quantity">Jumlah:</label>
        <input type="number" name="quantity" id="quantity">
        <br>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>