<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        $id = $_POST["id"];
        $nama = $_POST["nama"];
        $role = $_POST["role"];
        $available = $_POST["available"];
        $age = $_POST["age"];
        $location = $_POST["location"];
        $year = $_POST["year"];
        $email = $_POST["email"];
        $img = $_POST["img"];


        $sql = "UPDATE user SET nama = '$nama', role = '$role', available = '$available', age = '$age', location = '$location', year = '$year', email = '$email', img = '$img' WHERE id ='$id'";

        if($koneksi->query($sql) == TRUE){
            echo '<script>alert("Update data berhasil")</script>';    
        }else{
            echo '<script>alert("Update data gagal")</script>';
        }
    }
?>