<?php
//cek apakah tidak ada data di $_GET
//isset adalah function untuk mengecek apakah variabel pernah dibikin atau belum

    // cara baca : ! artinya not 
    // apakah $_GET nama !isset(belum pernah) dibikin maka lakukan sesuatu
    // kita paksa user pindah dari halaman ini (redirect)
    if( 
        !isset($_GET["nama"]) || 
        !isset($_GET["nim"]) || 
        !isset($_GET["email"]) || 
        !isset($_GET["jurusan"]) || 
        !isset($_GET["gambar"]) 
    ) {
        //function untuk redirect
        header("Location:get1.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Detail Mahasiswa</title>
    </head>
    <body>
    
        <ul>
            <li><img src="img/<?= $_GET["gambar"];?>" width="70" height="100"></li>
            <li><?= $_GET["nama"]; ?></li>
            <li><?= $_GET["nim"]; ?></li>
            <li><?= $_GET["email"]; ?></li>
            <li><?= $_GET["jurusan"]; ?></li>
        </ul>
<a href="superglobal.php">kembali ke daftar mahasiswa</a>
    </body>
</html>