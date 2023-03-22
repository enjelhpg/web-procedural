<?php

    //variable scoupe | lingkup variabel\
    //variabel yang dibuat didalam function hanya berfungsi didalam function tersebut

    $x = 10;
    
    function tampilx(){

        //contoh variabel local, diletakkan langsung dalam function 
        // $x = 20;

        //untuk mengambil variabel dari luar function
        //code global mencari variabel di luar function
        global $x;
        echo $x;
    }
    tampilx();
    echo "<br>";
    echo $x;

?>