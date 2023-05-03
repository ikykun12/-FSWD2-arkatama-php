<!DOCTYPE html>
<html>

<body>
    <?php 
function pattern1() {
    echo "*<br>";
    echo "**<br>";
    echo "***<br>";
    echo "****<br>";
    echo "*****<br>";
}

function pattern2() {
    echo "&nbsp;&nbsp;&nbsp;<br>";
    echo "*****<br>";
    echo "****<br>";
    echo "***<br>";
    echo "**<br>";
    echo "*<br>";
    echo "&nbsp";
}

function pattern3() {
    echo "&nbsp;&nbsp;&nbsp;<br>";
    echo "&nbsp;&nbsp;&nbsp;*<br>";
    echo "&nbsp;&nbsp;***<br>";
    echo "*****<br>";
    echo "&nbsp;&nbsp;***<br>";
    echo "&nbsp;&nbsp;&nbsp;*<br>";
}

function pattern4() {
    echo "&nbsp;&nbsp;&nbsp;<br>";
    echo "*****<br>";
    echo "&nbsp;&nbsp;***<br>";
    echo "&nbsp;&nbsp;&nbsp;*<br>";
    echo "&nbsp;&nbsp;***<br>";
    echo "*****<br>";
}

function print_pattern($func_name) {
    if (function_exists($func_name)) {
        $func_name();
    } else {
        echo "&nbsp;&nbsp;&nbsp;<br>";
        echo "Pattern not found";

    }
}


print_pattern("pattern1"); // akan mencetak pola bintang pertama
print_pattern("pattern2"); // akan mencetak pola bintang kedua
print_pattern("pattern3"); // akan mencetak pola binatang ketiga
print_pattern("pattern4"); // akan mencetak pola bintang keempat"
print_pattern("pattern5"); // akan mencetak pesan "Pattern not found"


    
  ?>
</body>

</html>