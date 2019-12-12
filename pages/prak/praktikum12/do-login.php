<?php
    include '../praktikum9/koneksi.php';
    session_start();

    $user = $_POST['email'];
    $pass = md5($_POST['password']);
 
    $login = mysqli_query($koneksi,"SELECT * FROM user WHERE email='$user' AND password='$pass'");
    $cek = mysqli_num_rows($login);
    $profile = mysqli_fetch_assoc($login);

    if($cek > 0){
        // echo 'Login berhasil';

        if(isset($_POST['remember'])){
            setcookie("remember_email", $user, time() + 3600 *24);
        }else{
            setcookie("remember_email", "", time() - 1);
        }

        $_SESSION['user'] = $user;
        $_SESSION['nama'] = $profile['nama'];

        header('Location: home/');
    }else{
        // echo 'Login gagal';
        $_SESSION['error'] = 'Username atau password tidak sesuai';
        header('Location: index.php');
    }
?>