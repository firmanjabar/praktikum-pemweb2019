<!DOCTYPE html>
<html>

<head>
	<title>Praktikum 7</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../assets/styles.css">
	<link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
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
			<li><a href="../../index.php">Home</a></li>
			<li><a class="active" href="praktikum.html">Praktikum</a></li>
			<li><a href="../saran.html">Saran</a></li>
		</ul>
	</div>
	<div id="id2">
		<ul id="sidebar">
			<li><a href="praktikum.html">Praktikum1</a></li>
			<li><a href="praktikum2.html">Praktikum2</a></li>
			<li><a href="praktikum3.html">Praktikum3</a></li>
			<li><a href="praktikum4.html">Praktikum4</a></li>
			<li><a href="praktikum5.html">Praktikum5</a></li>
			<li><a href="praktikum6.html">Praktikum6</a></li>
			<li><a class="active" href="praktikum7.php">Praktikum7</a></li>
			<li><a href="praktikum8.php">Praktikum8</a></li>
			<li><a href="praktikum9/">Praktikum9</a></li>
			<li><a href="praktikum10.html">Praktikum10</a></li>
			<li><a href="praktikum11.html">Praktikum11</a></li>
			<li><a href="praktikum12/">Praktikum12</a></li>
		</ul>
	</div>

	<div id="content" class="contentPrak pt-3" style="height:1000px;">
		<h2>Praktikum 7 - Implementasi PHP (Generate Table)</h2>
		<hr>
	    <h4>Table dengan PHP</h4>

		<form action="praktikum7_hasil.php" method="get">
		<div class="form-group">
			<label for="row">Row</label>
			<input name="row" type="number" class="form-control">
		</div>
		<div class="form-group">
			<label for="col">Column</label>
			<input name="col" type="number" class="form-control">
		</div>
		<input type="submit" class="btn btn-primary">
		</form>

	</div>
</body>
</html>