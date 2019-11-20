<?php
    include 'koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $role = $_POST['role'];
    $available = $_POST['available'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $img = $_POST['img'];

    mysqli_query($koneksi, "UPDATE user SET 
    nama = '$nama',
    role = '$role',
    available = '$available',
    age = $age,
    location = '$location',
    year = '$year',
    email = '$email',
    img = '$img' WHERE id = $id
    ");

    header('Location: index.php');
?>