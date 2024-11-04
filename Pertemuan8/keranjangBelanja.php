<html>
    <head>` 
</head>
<body>
    <h2>Keranjang Belanja</h2>

    <?php
 $beliNovel = isset($_COOKIE['beliNovel']) ? $_COOKIE['beliNovel'] : " ";
 $beliBuku = isset($_COOKIE['beliBuku']) ? $_COOKIE['beliBuku'] : " ";

    echo "Jumlah Buku Novel: ". $beliNovel ."<br>";
    echo "Jumlah Buku: " . $beliBuku;

    ?>
    </body>
    </html>