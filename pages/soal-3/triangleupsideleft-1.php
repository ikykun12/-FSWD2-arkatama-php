<!DOCTYPE html>
<html>
<!-- Soal nomor  3 -->
<!-- triangle downside right  - 1-->

<body>
    <?php
function printPattern($row = 6  , $symbol = '$') {
  for ($i = 1; $i <= $row; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo $symbol . " "; // menampilkan simbol
    }
    echo "<br>"; // membuat baris baru
  }
}

// Contoh penggunaan dengan nilai default
printPattern();

echo "<br>"; // membuat baris baru

// Contoh penggunaan dengan nilai yang berbeda
printPattern(6, '#');

?>
</body>

</html>