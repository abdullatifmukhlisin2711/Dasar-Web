<?php
if(isset($_POST["submit"])){
    $targerdir = "uploads/";
    $targetfile = $targerdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array("png", "jpg", "jpeg", "gif");
    $maxsize = 5*1024*1024;

    if(in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <=$maxsize){

        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)){
        echo "File berhasil diunggah";
        }
        else{
            echo "Gagal mengunggah file";
        }
    }else{
        echo "File tidak valid atau melebih i ukuran maksimum yang diizinkan";
    }
}
?>