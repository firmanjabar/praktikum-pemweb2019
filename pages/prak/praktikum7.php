<!DOCTYPE html>
<html>
<head>
	<title>Praktikum 7</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0" >
	<link rel="stylesheet" type="text/css" href="../../assets/styles.css">
	<style>
		.diff{
			background-color: #ababab;
		}
	</style>
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
		  <li><a href="../../index.html">Home</a></li>
		  <li><a class="active" href="praktikum.html">Praktikum</a></li>
		  <li><a href="../saran.html">Saran</a></li>
		</ul>
	</div>
	<div id="id2">
		<ul id="sidebar">
		  <li><a href="praktikum.html">Praktikum1</a></li>
		  <li><a href="#praktikum2.html">Praktikum2</a></li>
		  <li><a href="#praktikum3.html">Praktikum3</a></li>
		  <li><a href="praktikum4.html">Praktikum4</a></li>
		  <li><a href="#praktikum5.html">Praktikum5</a></li>
		  <li><a href="praktikum6.html">Praktikum6</a></li>
		  <li><a class="active" href="praktikum7.php">Praktikum7</a></li>
		  <li><a href="praktikum71.php">Praktikum7.1</a></li>
		  
		</ul>
	</div>

	<div id="content" class="contentPrak">
	    <h2>Table dengan PHP</h2>

	    <form action="praktikum7_hasil.php" method="get">
			Row: <input type="number" name="row"><br> <br>
			Column: <input type="number" name="col"><br> <br>
			<input type="submit">
		</form>

	</div>
</body>
</html>