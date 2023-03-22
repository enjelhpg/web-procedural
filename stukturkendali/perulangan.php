<?php
/*
Latihan PHP dasar - Struktur Kendali (Perulangan dan Pengkondisian)
-Syntax Pengulangan : for,while,do...while, dan foreach.
-Syntax Pengkondisian : if..else, if...else...if..else,ternary, dan switch.
*/

// Pengulangan
for ($i = 0; $i < 5; $i++ ) { //selama i lebih kecil dari lima maka lakukan pengulangan terus menerus
 echo "hello world! <br>";
}

$i = 0;
while ($i < 10){
    echo "Hello World<br>";
    $i++;
}

$i = 0;
do {
    echo "hello world aja<br>";
    $i++;
} while ($i < 5);
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Latihan 1</title>
    </head>
    <body>
        <table border="1" cellpadding="10" cellspacing="0">
            <?php
                for ( $i = 1; $i <= 3; $i++   ){
                    echo "<tr>";
                    for ($j = 1; $j <= 5; $j++){
                        echo "<td>$i,$j</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>