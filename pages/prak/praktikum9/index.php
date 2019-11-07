<!DOCTYPE html>
<?php
    include "show-data.php";
?>
<html>
<head>
	<title>Praktikum 6</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../assets/styles.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/bootstrap/css/bootstrap.min.css">
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
		  <li><a href="../../../index.html">Home</a></li>
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
		  <li><a class="active" href="index.php">Praktikum9</a></li>
		</ul>
	</div>

	<div id="content" class="contentPrak">
        <div class="mt-3 card mx-auto bg-light" style="width: 100%; display: block">
            <div class="row text-center p-3">
                <div class="col-sm-12">
                    <img width="200em" alt="img firman" src="https://avatars0.githubusercontent.com/u/45032367?s=460&v=4"
                        class="rounded-circle img-fluid">
                </div>
                <div class="col-sm-12">
                    <hr>
                    <h3><?= $nama?>, <span class="badge badge-info"><?= $age?>th</span></h3>
                    <h6 class="mt-3"><?= $email?></h6>
                    <h5 class="mt-3"><?= $role?>, <?= $year?> years</h5>
                    <span class="blockquote-footer"><?= $available?></span>
                    <b class="mt-3">(<?= $location?>)</b>
                </div>
            </div>
        </div>
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