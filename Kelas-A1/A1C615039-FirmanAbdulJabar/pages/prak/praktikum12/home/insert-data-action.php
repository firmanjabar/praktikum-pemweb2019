<?php
    include "koneksi.php";

    $nama = $_POST['nama'];
    $role = $_POST['role'];
    $available = $_POST['available'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $img=$_FILES['img'];
    if(isset($img)){
        $ext=pathinfo($img['name'], PATHINFO_EXTENSION);
        $filename=uniqid().'.'.$ext;

        if($ext !== "jpg" && $ext !== "png"){
            echo 'format tdk sesuai';
            exit();
        }

        move_uploaded_file($img['tmp_name'],"../../praktikum9/img/$filename");
    }

    mysqli_query($koneksi, "INSERT INTO user
    (
        nama,
        role,
        available,
        age,
        location,
        year,
        email,
        img,
        password
    ) VALUE
    (
        '$nama',
        '$role',
        '$available',
        '$age',
        '$location',
        '$year',
        '$email',
        '$filename',
        '$pass'
    )");

    header('Location: index.php');
?>