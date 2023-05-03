<?php
	$rows=5;
	//Loop pertama digunakan untuk mengatur baris
	for($j=1; $j<=$rows; $j++){
		// loop kedua digunakan untuk mencetak spasi kosong di awal setiap baris
	for($i=1; $i<=$j; $i++){
		echo " &nbsp";
	}
	//loop ketiga digunakan untuk mencetak bintang
	for($a=$rows; $a>=$j; $a-=1){
		echo "*";
	}
	echo "<br>";
	}
?>