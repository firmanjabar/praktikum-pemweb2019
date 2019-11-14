<?php
$nama = "Firman Abdul Jabar"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0" >
	<link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>
<body>

	<div id="id">
		<div class="menu_mobile">
			<a href="#" onclick="showMenu()">Menu</a>
		</div>
		<ul id="menu">
		  <li><a class="active" href="index.html">Home</a></li>
		  <li><a href="pages/prak/praktikum.html">Praktikum</a></li>
		  <li><a href="pages/saran.html">Saran</a></li>
		</ul>
	</div>

	<div id="content" class="content">
		<h2 style="text-align: center;">About <?= $nama ?></h2>
		<hr>
		<img class="imgCenter" src="https://loremflickr.com/250/150">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</div>

<script>
	function showMenu() {
		var menu = document.getElementById("menu");
		var box = document.getElementById("content");

		if (menu.style.display === "block") {
			menu.style.display = "none";
			box.style.paddingTop = "0px";
		}else{
			menu.style.display = "block";
			box.style.paddingTop = "125px";
		}
	}
</script>
</body>
</html>