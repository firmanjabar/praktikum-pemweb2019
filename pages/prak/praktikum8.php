<?php
$movie = array
  (
  array("Maleficent: Mistress of Evil",7.3,"Maleficent and her goddaughter Aurora begin to question the complex family ties that bind them as they are pulled in different directions by impending nuptials, unexpected allies, and dark new forces at play.","https://image.tmdb.org/t/p/w500/skvI4rYFrKXS73BJxWGH54Omlvv.jpg"),
  array("Terminator: Dark Fate",6.5,"More than two decades have passed since Sarah Connor prevented Judgment Day, changed the future, and re-wrote the fate of the human race. Dani Ramos is living a simple life in Mexico City with her brother and father when a highly advanced and deadly new Terminator – a Rev-9 – travels back through time to hunt and kill her. Dani's survival depends on her joining forces with two warriors: Grace, an enhanced super-soldier from the future, and a battle-hardened Sarah Connor. As the Rev-9 ruthlessly destroys everything and everyone in its path on the hunt for Dani, the three are led to a T-800 from Sarah’s past that may be their last best hope.","https://image.tmdb.org/t/p/w500/a6cDxdwaQIFjSkXf7uskg78ZyTq.jpg"),
  array("Fast & Furious Presents: Hobbs & Shaw",6.5,"Ever since US Diplomatic Security Service Agent Hobbs and lawless outcast Shaw first faced off, they just have swapped smacks and bad words. But when cyber-genetically enhanced anarchist Brixton's ruthless actions threaten the future of humanity, both join forces to defeat him. (A spin-off of “The Fate of the Furious,” focusing on Johnson's Luke Hobbs and Statham's Deckard Shaw.)","https://image.tmdb.org/t/p/w500/qAhedRxRYWZAgZ8O8pHIl6QHdD7.jpg"),
  array("Spider-Man: Far From Home",7.6,"Peter Parker and his friends go on a summer trip to Europe. However, they will hardly be able to rest - Peter will have to agree to help Nick Fury uncover the mystery of creatures that cause natural disasters and destruction throughout the continent.","https://image.tmdb.org/t/p/w500/5myQbDzw3l8K9yofUXRJ4UTVgam.jpg"),
  array("Joker",8.7,"During the 1980s, a failed stand-up comedian is driven insane and turns to a life of crime and chaos in Gotham City while becoming an infamous psychopathic crime figure.","https://image.tmdb.org/t/p/w500/n6bUvigpRFqSwmPp1m2YADdbRBc.jpg"),
  array("The Lion King",7.1,"Simba idolises his father, King Mufasa, and takes to heart his own royal destiny. But not everyone in the kingdom celebrates the new cub's arrival. Scar, Mufasa's brother—and former heir to the throne—has plans of his own. The battle for Pride Rock is ravaged with betrayal, tragedy and drama, ultimately resulting in Simba's exile. With help from a curious pair of newfound friends, Simba will have to figure out how to grow up and take back what is rightfully his.","https://image.tmdb.org/t/p/w500/nRXO2SnOA75OsWhNhXstHB8ZmI3.jpg"),
  array("Gemini Man",5.9,"Henry Brogen, an aging assassin tries to get out of the business but finds himself in the ultimate battle: fighting his own clone who is 25 years younger than him and at the peak of his abilities.","https://image.tmdb.org/t/p/w500/c3F4P2oauA7IQmy4hM0OmRt2W7d.jpg"),
  array("IT: Chapter 2",7,"27 years after overcoming the malevolent supernatural entity Pennywise, the former members of the Losers' Club, who have grown up and moved away from Derry, are brought back together by a devastating phone call.","https://image.tmdb.org/t/p/w500/8moTOzunF7p40oR5XhlDvJckOSW.jpg"),
  array("Joker",8.7,"During the 1980s, a failed stand-up comedian is driven insane and turns to a life of crime and chaos in Gotham City while becoming an infamous psychopathic crime figure.","https://image.tmdb.org/t/p/w500/n6bUvigpRFqSwmPp1m2YADdbRBc.jpg"),
  array("The Lion King",7.1,"Simba idolises his father, King Mufasa, and takes to heart his own royal destiny. But not everyone in the kingdom celebrates the new cub's arrival. Scar, Mufasa's brother—and former heir to the throne—has plans of his own. The battle for Pride Rock is ravaged with betrayal, tragedy and drama, ultimately resulting in Simba's exile. With help from a curious pair of newfound friends, Simba will have to figure out how to grow up and take back what is rightfully his.","https://image.tmdb.org/t/p/w500/nRXO2SnOA75OsWhNhXstHB8ZmI3.jpg"),
  array("Gemini Man",5.9,"Henry Brogen, an aging assassin tries to get out of the business but finds himself in the ultimate battle: fighting his own clone who is 25 years younger than him and at the peak of his abilities.","https://image.tmdb.org/t/p/w500/c3F4P2oauA7IQmy4hM0OmRt2W7d.jpg"),
  array("IT: Chapter 2",7,"27 years after overcoming the malevolent supernatural entity Pennywise, the former members of the Losers' Club, who have grown up and moved away from Derry, are brought back together by a devastating phone call.","https://image.tmdb.org/t/p/w500/8moTOzunF7p40oR5XhlDvJckOSW.jpg")
  );
?>

<!DOCTYPE html>
<html>
<head>
	<title>Praktikum 4</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0" >
	<link rel="stylesheet" type="text/css" href="../../assets/styles.css">
	<style type="text/css">
		/* The Modal (background) */
		.modal {
		  display: none; /* Hidden by default */
		  position: fixed; /* Stay in place */
		  z-index: 1; /* Sit on top */
		  padding-top: 50px; /* Location of the box */
		  left: 0;
		  top: 0;
		  width: 100%; /* Full width */
		  height: 100%; /* Full height */
		  overflow: auto; /* Enable scroll if needed */
		  background-color: rgb(0,0,0); /* Fallback color */
		  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
		  position: relative;
		  background-color: #fefefe;
		  margin: auto;
		  padding-bottom: 20px;
		  border: 1px solid #888;
		  width: 40%;
		  text-align: center;
		  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
		  -webkit-animation-name: animatetop;
		  -webkit-animation-duration: 0.4s;
		  animation-name: animatetop;
		  animation-duration: 0.4s
		}

		/* Add Animation */
		@-webkit-keyframes animatetop {
		  from {top:-300px; opacity:0} 
		  to {top:0; opacity:1}
		}

		@keyframes animatetop {
		  from {top:-300px; opacity:0}
		  to {top:0; opacity:1}
		}

		/* The Close Button */
		.close {
		  color: white;
		  float: right;
		  font-size: 28px;
		  font-weight: bold;
		}

		.close:hover,
		.close:focus {
		  color: #000;
		  text-decoration: none;
		  cursor: pointer;
		}

		.modal-header {
		  padding: 2px 16px;
		  background-color: #5cb85c;
		  color: white;
		}

		.modal-body {padding: 2px 16px;
		overflow: auto;
		height: 500px;}

		.modal-footer {
		  padding: 2px 16px;
		  background-color: #5cb85c;
		  color: white;
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
		  <li><a class="active" href="praktikum4.html">Praktikum4</a></li>
		  <li><a href="#praktikum5.html">Praktikum5</a></li>
		  <li><a href="praktikum6.html">Praktikum6</a></li>
		</ul>
	</div>

	<div id="content" class="contentPrak">
	    <h2>My Products</h2>
	 
	    <div id="card">
	    	<div id="myBtn">
	    	<?php for ($row = 0; $row < count($movie); $row++) :?>
			        <div class="thumbnail" onclick="myFunction(<?= $row;?>)">
					  	<img src="<?= $movie[$row][3]?>">
						<h3><?= $movie[$row][0]?></h3>
						<p>Rating: <?= $movie[$row][1]?></p>
					</div>
			<?php endfor;?>
	    	</div>
	    </div>

	    <div id="myModal" class="modal">
	    	<div class="modal-content">
				<div class="modal-header">
				    <span class="close">&times;</span>
				    <h2>Deetail Movie</h2>
				</div>
				<div class="modal-body">
				    <span id="cetak">
				    </span>
			  	</div>
			</div>
		</div>

	</div>

	<div class="footer">
		<caption>copyright Praktikum PemWeb - 2019</caption>
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

	function myFunction(index){
		// console.log(i)
		var title = ["Maleficent: Mistress of Evil","Terminator: Dark Fate","Fast & Furious Presents: Hobbs & Shaw","Spider-Man: Far From Home","Joker", "The Lion King","Gemini Man", "IT: Chapter 2"];
		var rating = [7.3,6.5,6.5,7.6,"8,7", "7,1", "5,9", "7"];
		var desc = ["Maleficent and her goddaughter Aurora begin to question the complex family ties that bind them as they are pulled in different directions by impending nuptials, unexpected allies, and dark new forces at play.","More than two decades have passed since Sarah Connor prevented Judgment Day, changed the future, and re-wrote the fate of the human race. Dani Ramos is living a simple life in Mexico City with her brother and father when a highly advanced and deadly new Terminator – a Rev-9 – travels back through time to hunt and kill her. Dani's survival depends on her joining forces with two warriors: Grace, an enhanced super-soldier from the future, and a battle-hardened Sarah Connor. As the Rev-9 ruthlessly destroys everything and everyone in its path on the hunt for Dani, the three are led to a T-800 from Sarah’s past that may be their last best hope.",
		"Ever since US Diplomatic Security Service Agent Hobbs and lawless outcast Shaw first faced off, they just have swapped smacks and bad words. But when cyber-genetically enhanced anarchist Brixton's ruthless actions threaten the future of humanity, both join forces to defeat him. (A spin-off of “The Fate of the Furious,” focusing on Johnson's Luke Hobbs and Statham's Deckard Shaw.)",
		"Peter Parker and his friends go on a summer trip to Europe. However, they will hardly be able to rest - Peter will have to agree to help Nick Fury uncover the mystery of creatures that cause natural disasters and destruction throughout the continent.",
		"During the 1980s, a failed stand-up comedian is driven insane and turns to a life of crime and chaos in Gotham City while becoming an infamous psychopathic crime figure.",
		"Simba idolises his father, King Mufasa, and takes to heart his own royal destiny. But not everyone in the kingdom celebrates the new cub's arrival. Scar, Mufasa's brother—and former heir to the throne—has plans of his own. The battle for Pride Rock is ravaged with betrayal, tragedy and drama, ultimately resulting in Simba's exile. With help from a curious pair of newfound friends, Simba will have to figure out how to grow up and take back what is rightfully his.",
		"Henry Brogen, an aging assassin tries to get out of the business but finds himself in the ultimate battle: fighting his own clone who is 25 years younger than him and at the peak of his abilities.",
		"27 years after overcoming the malevolent supernatural entity Pennywise, the former members of the Losers' Club, who have grown up and moved away from Derry, are brought back together by a devastating phone call."
		];
		var img = ["https://image.tmdb.org/t/p/w500/skvI4rYFrKXS73BJxWGH54Omlvv.jpg",
		"https://image.tmdb.org/t/p/w500/a6cDxdwaQIFjSkXf7uskg78ZyTq.jpg",
		"https://image.tmdb.org/t/p/w500/qAhedRxRYWZAgZ8O8pHIl6QHdD7.jpg",
		"https://image.tmdb.org/t/p/w500/5myQbDzw3l8K9yofUXRJ4UTVgam.jpg",
		"https://image.tmdb.org/t/p/w500/n6bUvigpRFqSwmPp1m2YADdbRBc.jpg", 
		"https://image.tmdb.org/t/p/w500/nRXO2SnOA75OsWhNhXstHB8ZmI3.jpg",
		"https://image.tmdb.org/t/p/w500/c3F4P2oauA7IQmy4hM0OmRt2W7d.jpg",
		"https://image.tmdb.org/t/p/w500/8moTOzunF7p40oR5XhlDvJckOSW.jpg",
		];

		var text2 = "";

		text2 += `
	  	<img src="${img[index]}">
		<h2>${title[index]}</h2>
		<p>Rating: ${rating[index]}</p>
		<caption>${desc[index]}</caption>
		` 
		document.getElementById("cetak").innerHTML = text2;
	}

	// Get the modal
	var modal = document.getElementById("myModal");

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on the button, open the modal
	btn.onclick = function() {
	  modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	}
</script>
</body>
</html>