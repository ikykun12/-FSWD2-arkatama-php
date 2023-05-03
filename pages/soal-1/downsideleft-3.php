<?php
// Set jumlah baris yang diinginkan
	$rows=5;
	// Loop pertama digunakan untuk mengatur baris
	for($j=1; $j<=$rows; $j++){
		//Loop kedua digunakan untuk mencetak bintang
	for($a=$rows; $a>=$j; $a-=1){
		echo "*&nbsp";
	}
	echo "<br>";
	}
?>