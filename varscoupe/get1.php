<?php

    //variabel super global sdh dimiliki php : 
    // $_GET | $_POST | $_REQUEST | $_SESSION | $_COOKIE | $_SERVER | $_ENV
    // semuanya merupakan array assosiative, dan masing-masing punya cara kerja berbeda

    // $_GET
    // ? artinnya saya akan menambahkan sebuah data
    // pasannya adalah key dan elemen
    $_GET["nama"]="Enjel HPG";
    var_dump($_GET);

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
        ],
        [
            "nama" => "Freddy Freeman", 
            "nim" => "E020321009",
            "email" => "freedyfree@gmail.com",
            "jurusan" => "Teknik Mesin",
            "gambar" => "jihan3.jpeg"
        ]
    ];


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Materi GET</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <ul>
        <?php foreach($mahasiswa as $mhs) { ?>
            <ul>
                <li>
                    <a href="get2.php?nama=<?= $mhs ["nama"]; ?>
                    &nim=<?= $mhs["nim"]; ?>
                    &email=<?= $mhs["email"];?>
                    &jurusan=<?= $mhs["jurusan"]; ?>
                    &gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?> </a>
                    <!--metode request get adalah metode pengiriman data melalui url dan data tersebut dapat
                ditangkap oleh variabel superglobal $_GET -->
                </li>
            </ul>
        <?php } ?>
        </ul>
    </body>
</html>