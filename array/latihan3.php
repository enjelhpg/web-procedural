<?php
   // array numeric adalah array yang indexnya angka
   // array asosiatif adalah array yang indexnya adalah string yang kita buat sendiri untuk mengasosiasikan ke nilai yang ada dalam array 
//contoh array multidimensi dengan double []
   $mahasiswa = [
    ["Enjel Hanganti Putri Gultom","E020321007","Manajemen Informatika","enjelhpg@gmail.com"],
    ["Billy Batson","E020321008","Teknik Informatika","billybatson@gmail.com"],    
    ["Freddy Freeman","E020321009","Teknik Mesin","freddyfreeman@gmail.com"]
];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
        <style>
            .clear {
                clear : both; 
            }
        </style>
    </head>
    <body>
        <h1>Data Mahasiswa</h1>
        
        <!--Cara pertama-->
        <?php foreach($mahasiswa as $m) {?>
            <?php foreach($m as $mhs) {?>
            <div><?= $mhs; ?></div>
            <?php } ?>
            <div class="clear"></div>
        <?php } ?>

        <div class="clear"></div>
        <!--Cara kedua-->
        <?php foreach($mahasiswa as $mhs) { ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NIM : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
        <?php } ?>

    </body>
</html>