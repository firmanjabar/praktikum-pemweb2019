<!DOCTYPE html>
<?php
	include "show-data.php";
	include "update-db.php";
?>
<html>
<head>
	<title>Praktikum 6</title>
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
                    <img width="200em" alt="img firman" src="<?= $img?>"
                        class="rounded-circle img-fluid">
                </div>
                <div class="col-sm-12">
                    <hr>
                    <h3><?= $nama?>, <span class="badge badge-info"><?= $age?>th</span></h3>
                    <h6 class="mt-3"><?= $email?></h6>
                    <h5 class="mt-3"><?= $role?>, <?= $year?> years</h5>
                    <span class="blockquote-footer"><?= $available?></span>
                    <b class="mt-3">(<?= $location?>)</b><br><br>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
					Edit Profile
					</button>
                </div>
            </div>
        </div>

		<!-- Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Edit Profile</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form method="POST" action="<?= $_SERVER['PHP_SELF'];?>">
				<div class="form-group">
					<label for="id">Id User</label>
					<input type="text" class="form-control" id="id" name="id" aria-describedby="idUser" value="<?= $id;?>">
				</div>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input value="<?= $nama;?>" type="text" class="form-control" id="nama" name="nama" aria-describedby="namaUser">
				</div>
				<div class="form-group">
					<label for="role">Role</label>
					<input value="<?= $role;?>" type="text" class="form-control" id="role" name="role" aria-describedby="role">
				</div>
				<div class="form-group">
					<label for="available">Availableilty</label>
					<input value="<?= $available;?>" type="text" class="form-control" id="available" name="available" aria-describedby="available">
				</div>
				<div class="form-group">
					<label for="age">Age</label>
					<input value="<?= $age;?>" type="text" class="form-control" id="age" name="age" aria-describedby="age">
				</div>
				<div class="form-group">
					<label for="location">Location</label>
					<input value="<?= $location;?>" type="text" class="form-control" id="location" name="location" aria-describedby="location">
				</div>
				<div class="form-group">
					<label for="year">Year</label>
					<input value="<?= $year;?>" type="text" class="form-control" id="year" name="year" aria-describedby="year">
				</div>
				<div class="form-group">
					<label for="email">E-mail</label>
					<input value="<?= $email;?>" type="text" class="form-control" id="email" name="email" aria-describedby="email">
				</div>
				<div class="form-group">
					<label for="img">Photo Profile</label>
					<input value="<?= $img;?>" type="text" class="form-control" id="img" name="img" aria-describedby="img">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
			</div>
			</form>
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