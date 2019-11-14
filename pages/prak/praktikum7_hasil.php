<?php

$row = $_GET["row"];
$col = $_GET["col"];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Praktikum 6</title>
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
		  <li><a href="../../index.php">Home</a></li>
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
		</ul>
	</div>

	<div id="content" class="contentPrak">
	    <h2>Table dengan PHP</h2>

	    <table border="1" cellpadding="10" cellspacing="0">
	    	<?php for($i = 1; $i <= $row; $i++) :?>
	    	<tr>
	    		<?php for($j = 1; $j <= $col; $j++) :?>
		    		<?php if($i % 2 == 0 && $j % 2 == 0) :?>
		    			<td class="diff">
		    		<?php elseif($i % 2 == 1 && $j % 2 == 1) :?>
		    			<td class="diff">
		    		<?php else :?>
		    			<td>
		    		<?php endif;?>
		    			<?= "$i , $j"; ?>
		    		</td>
	    		<?php endfor;?>
	    	</tr>
	    	<?php endfor;?>
	    </table>

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