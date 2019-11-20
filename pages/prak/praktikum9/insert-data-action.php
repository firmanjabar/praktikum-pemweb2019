<?php
    include "koneksi.php";

    $nama = $_POST['nama'];
    $role = $_POST['role'];
    $available = $_POST['available'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $img = $_POST['img'];

    mysqli_query($koneksi, "INSERT INTO user
    (
        nama,
        role,
        available,
        age,
        location,
        year,
        email,
        img
    ) VALUE
    (
        '$nama',
        '$role',
        '$available',
        '$age',
        '$location',
        '$year',
        '$email',
        '$img'
    )");

    header('Location: index.php');
?>