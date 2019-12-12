<?php
    include 'koneksi.php';

    $id = $_GET['id'];
    $profile = mysqli_query($koneksi, "SELECT * FROM user WHERE id = $id");
    $profile = mysqli_fetch_assoc($profile);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Profile</title>
</head>
<body>
    <h1>
        <?= $profile['nama']?>
    </h1>
</body>
</html>