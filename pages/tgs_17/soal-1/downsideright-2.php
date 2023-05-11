<?php
// Set jumlah baris yang diinginkan
	$rows=5;
    // Loop pertama digunakan untuk mengatur baris
	for($i=$rows;$i>0;$i--){
		// loop kedua digunakan untuk mencetak spasi kosong di awal setiap baris
	for($j=1; $j<=$i; $j++){
		echo " &nbsp";
	}
	// loop ketiga digunakan untuk mencetak bintang
	for($i1=$rows;$i1>=$i;$i1--){
		echo"*";
	}
	echo"<br>";
	}
?>