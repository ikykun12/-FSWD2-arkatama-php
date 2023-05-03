<!DOCTYPE html>
<html>

<body>
    <?php 
function print_pattern($func_name) {
    if ($func_name == "pattern1") {
        echo "$&nbsp;\n$$&nbsp;\n$$$";
    } elseif ($func_name == "pattern2") {
        echo "***\n**&nbsp;\n*";
    } elseif ($func_name == "pattern3") {
        echo "&nbsp;&nbsp;#&nbsp;&nbsp;\n&nbsp;###&nbsp;\n#####";
    } else {
        echo "Pattern not found";
    }
    echo "<br>"; // tambahkan baris kosong di akhir setiap pola
}

print_pattern("pattern1"); // akan mencetak dolar
print_pattern("pattern2"); // akan mencetak pola bintang 
print_pattern("pattern3"); // akan mencetak pola pagar
print_pattern("pattern4"); // akan mencetak pesan "Pattern not found"


    
  ?>
</body>

</html>