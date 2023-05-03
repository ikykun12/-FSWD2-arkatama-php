<?php
// Set jumlah baris yang diinginkan
$rows = 5;

// Looping untuk mencetak bintang setengah piramida
for ($i = 1; $i <= $rows; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    echo "*&nbsp";
  }
  echo "<br>";
}
?>