<!DOCTYPE html>
<?php
    session_start();

    $remember_email = "";
    if(isset($_COOKIE['remember_email'])){
        $remember_email = $_COOKIE['remember_email'];
    }

    if(isset($_SESSION['user'])){
        header('Location: home/');
    }

    $print="";
    if(isset($_SESSION['error'])){
        $error=$_SESSION['error'];
        $print='
        <div class="mt-3 alert alert-warning alert-dismissible fade show" role="alert">
        <strong>'.$error.'</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
		';
		unset($_SESSION['error']);
    }
?>
<html>
<head>
	<title>Praktikum 9</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../assets/styles.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/bootstrap/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div id="id">
		<div class="menu_mobile">
			<a href="#" onclick="showMenu()">Menu</a>
		</div>
		<div class="sidebar_mobile">
			<a href="#" onclick="showSideBar()">SideBar</a>
		</div>
		<ul id="menu">
		  <li><a href="../../../index.php">Home</a></li>
		  <li><a class="active" href="praktikum.html">Praktikum</a></li>
		  <li><a href="../saran.html">Saran</a></li>
		</ul>
	</div>
	<div id="id2">
		<ul id="sidebar" class="mt-2">
		  <li><a href="../praktikum.html">Praktikum1</a></li>
		  <li><a href="#praktikum2.html">Praktikum2</a></li>
		  <li><a href="#praktikum3.html">Praktikum3</a></li>
		  <li><a href="../praktikum4.html">Praktikum4</a></li>
		  <li><a href="#praktikum5.html">Praktikum5</a></li>
		  <li><a href="../praktikum6.html">Praktikum6</a></li>
		  <li><a href="../praktikum7.php">Praktikum7</a></li>
		  <li><a href="../praktikum8.php">Praktikum8</a></li>
		  <li><a href="../praktikum9/">Praktikum9</a></li>
		  <li><a href="#praktikum">Praktikum10</a></li>
		  <li><a href="#praktikum">Praktikum11</a></li>
		  <li><a class="active" href="index.php">Praktikum12</a></li>
		</ul>
	</div>

	<div id="content" class="contentPrak">
        <?= $print;?>
        <div class="mt-3 card bg-light">
            <div class="row text-center p-3">
                <div class="col-sm-12">
                    <form method="POST" action="do-login.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input name="email" placeholder="Enter Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $remember_email?>"/>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="password" placeholder="Password" type="password" class="form-control" id="exampleInputPassword1" />
                        </div>
                        <div class="form-group form-check">
                            <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Login">
                    </form>
                </div>
            </div>
        </div>
		<br>
	</div>

<script>

	function showMenu() {
		var menu = document.getElementById("menu");
		var box = document.getElementById("content");
		var menu2 = document.getElementById("sidebar");

		if (menu.style.display === "block") {
			menu.style.display = "none";
			box.style.paddingTop = "0px";
			menu2.style.display = "none";
		}else{
			menu.style.display = "block";
			menu.style.position = "relative";
			box.style.paddingTop = "150px";
			menu2.style.display = "none";
		}
	}
	function showSideBar() {
		var menu = document.getElementById("sidebar");
		var box = document.getElementById("content");
		var menu2 = document.getElementById("menu");

		if (menu.style.display === "block") {
			menu.style.display = "none";
			menu2.style.display = "none";
		}else{
			menu.style.display = "block";
			menu.style.position = "sticky";
			menu2.style.display = "none";
			box.style.paddingTop = "0px";
		}
	}
</script>
</body>
</html>