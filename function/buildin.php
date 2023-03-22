<?php

// PHP dasar - Function 
// function adalah potongan program atau baris baris kode yang kita buat untuk mempermudah kita memprogram
// kode program tadi bisa kita rename dan kita panggil berulang-ulang.

/* Build-In Function yang sering digunakan
1. DATE - TIME
- time()
- date()
- mktime()
- strtotime()

2. STRING
- strlen()
- strcmp()
- explode()
- htmlspecialchars() -> melindungi dari hackers

3. UTILITY - fungsi bantuan
- var_dump() -> fungsi untuk mencetak isi dari sebuah variabel
- isset() -> mengecek variabel sudah pernah dibuat atau belum
- empty() -> mengecek variabel ada isinya atau belum
- die() -> stoping program
- sleep() -> pemberhentian sementara


*/

    // 1.) date untuk menampilkan tanggal dengan format tertentu
    echo date("l, d-M-Y"); //l untuk hari, d untuk tanggal, m untuk bulan, y untuk tahun

    echo "<br>";

    // 2.) time
    //UNIX Timestamp / EPOCH time adalah detik yang sdh berlalu dari 1 jan 1976
    echo time();
    echo "<br>";

    //penggabungan 2 function dari date and time
    echo date("l, d m Y", time()+60*60*24*100);
    echo "<br>";

    // 3.) mktime (0,0,0,0,0,0,0) urutannya : jam, menit, detik, bulan , tanggal, tahun
    //contoh mengetahui hari dan tanggal lahir
    echo date( "l, d M Y", mktime(0,0,0,6,13,2003));
    echo "<br>";

    // 4.) strtotime - kebalikan dari function time
    echo date("l, d M Y", strtotime ("25 aug 1985"));
?>