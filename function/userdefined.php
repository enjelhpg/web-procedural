<?php
    
// User-Defined Function
//bedanya dengan build-in adalah fungsinya harus didefinisikan dulu baru bisa dipanggil
// sebuah function biasanya mengembalikan nilai (return)

function salam($waktu, $nama){
    /* kalau tidak ada parameter kita buat default dengan cara :
    function salam($waktu = "Pagi", $nama = "Admin"){
    jadi pada saat dipanggil tidak diisi parameter juga tidak apa-apa*/
    return "selamat $waktu, $nama!";
}   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Malam","Enjel"); ?></h1>
</body>
</html>