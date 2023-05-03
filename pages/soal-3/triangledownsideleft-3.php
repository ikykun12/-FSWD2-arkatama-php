<!DOCTYPE html>
<html>
<!-- Soal nomor  3 -->
<!-- triangle downside left  - 3 -->

<body>
    <?php 
function printPattern($row = 10, $symbol = '@') {
    for ($i = $row; $i >= 1; $i--) {
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
  printPattern(10, '#');
  ?>
</body>

</html>