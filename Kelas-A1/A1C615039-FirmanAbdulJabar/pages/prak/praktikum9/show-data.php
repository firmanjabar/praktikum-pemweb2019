<?php
    include "koneksi.php";

    $sql = "SELECT * FROM user ORDER BY user.nama ASC";
    $result = $koneksi->query($sql);

    foreach($result as $res){
        $id = $res["id"];
        $nama = $res["nama"];
        $role = $res["role"];
        $available = $res["available"];
        $age = $res["age"];
        $location = $res["location"];
        $year = $res["year"];
        $email = $res["email"];
        $img = $res["img"];
    }
?>