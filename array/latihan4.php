<?php
    //array associative
    // definisinya sama dengan array numeric, kecuali
    // key-nya adalah string yang kita buat sendiri 
    $mahasiswa = [
    [
        "nama" => "Enjel Hanganti Putri Gultom", 
        "nim" => "E020321007",
        "email" => "enjelhpg@gmail.com",
        "jurusan" => "Manajemen Informatika",
        "gambar" => "jihan1.jpg",
        "nilai" => [90,90,100]
    ],
    [
        "nama" => "Billy Batson", 
        "nim" => "E020321008",
        "email" => "billybatson@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "jihan2.jpg"
    ]
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
        <!--cara menampilkan dengan associative saja-->
        <!--eror karna data nya berupa campuran numeric dan associative-->
        <?= $mahasiswa["nama"]; ?>
<br>
        <!--cara menampilkan dengan gabungan numeric dan associative-->
        <?php echo $mahasiswa[0]["email"];?>
<br>
        <!--cara menampilkan dengan gabungan numeric dan associative-->
        <?= $mahasiswa[0]["nilai"][2]; ?>

        <!--Cara kedua-->
        <?php foreach($mahasiswa as $mhs) { ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" width="70" height="90">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["email"]; ?></li>
            <li>Email : <?= $mhs["jurusan"]; ?></li>
        </ul>
        <?php } ?>
    </body>
</html>