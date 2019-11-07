<?php
    include "koneksi.php";

    $sql = "INSERT INTO user
    (
        id,
        nama,
        role,
        available,
        age,
        location,
        year,
        email
    ) VALUE
    (
        '1',
        'Firman',
        'Web Developer',
        'Full Time',
        '21',
        'Banjarmasin',
        '2',
        'firmanabduljabar@gmail.com'
    )";

    if($koneksi->query($sql) == TRUE){
        echo "insert data berhasil";
    }else{
        echo "gagal";
    }
?>