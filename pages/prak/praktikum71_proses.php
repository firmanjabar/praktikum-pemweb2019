<?php

if(isset($_GET['submit'])){
	$i = $_GET['angka'];
	
	for($x = $i; $x >= 1 ; $x-=2){
		if($x % 10 == 0){
			echo "<br><b>$x adalah kelipatan 10</b> <br><br>";
		}
		else{
			echo "Angka: $x  bukan kelipatan 10<br><br>";
			}

		}
}
				
?>