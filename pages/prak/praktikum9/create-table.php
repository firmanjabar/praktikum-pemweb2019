<?php
    include "koneksi.php";

    $sql = "CREATE TABLE user(
        id int PRIMARY KEY,
        nama varchar(50),
        role varchar(50),
        available varchar(50),
        age int,
        location varchar(50),
        year varchar(40),
        email varchar(50)
    )";

    if($koneksi->query($sql) == TRUE){
        echo "table berhasil dibuat";
    }else{
        echo "table gagal";
    }
?>