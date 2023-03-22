<?php

    /*Belajar PHP Dasar - ARRAY (Cara ini untuk debugging)
    -> Definisi : 
        - array adalah sebuah variabel yang bisa menampung lebih dari satu / banyak nilai.
        - array juga merupakan pasangan antara key dan value, keynya adalah index yang dimulai dari 0
    -> Jadi elemen pada array dapat memiliki tipe data yang berbeda
    */

    //contoh 1 variabel diisi dengan 1 nilai
    $hari1 = "senin";
    $hari2 = "selasa";

    //membuat array cara lama
    //nilai aka elemen 
    $hari = array("senin","selasa","rabu","kamis","jumat","sabtu","minggu");

    //membuat array cara baru
    // kurung siku [] digunakan untuk mengganti array
    $bulan = ["Januari", "Februari","Maret","April"];
    $ara1 = [123, "string", false];

    //cara memanggil array (tidak bisa langsung echo)
    // var_dump(); |  print_r();
    var_dump($bulan);
    echo "<br>";
    print_r($ara1);

    echo "<br>";
    //menampilkan hanya 1 elemen dari array
    echo $bulan[0];

    echo "<br>";
    //menambah elemen baru di dalam array
    var_dump($bulan);
    $bulan[] = "Mei";
    $bulan[] = "Juni";
    echo "<br>";
    var_dump($bulan);

?>