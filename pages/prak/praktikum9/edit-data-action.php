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
    $pass = md5($_POST['password']);
    
    $img=$_FILES['img'];
    if(isset($img)){
        $ext=pathinfo($img['name'], PATHINFO_EXTENSION);
        $filename=uniqid().'.'.$ext;

        if($ext !== "jpg" && $ext !== "png"){
            echo 'format tdk sesuai';
            exit();
        }

        move_uploaded_file($img['tmp_name'],"img/$filename");
    }

    mysqli_query($koneksi, "UPDATE user SET 
    nama = '$nama',
    role = '$role',
    available = '$available',
    age = $age,
    location = '$location',
    year = '$year',
    email = '$email',
    password = '$pass',
    img = '$filename' WHERE id = $id
    ");

    header('Location: index.php');
?>