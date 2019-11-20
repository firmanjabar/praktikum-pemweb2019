<?php
    include "koneksi.php";

    $sql = "CREATE DATABASE profile";

    if($koneksi->query($sql) === TRUE){
        echo "Db berhasil dibuat";
    }else{
        echo "db gagal dibuat";
    }
?>