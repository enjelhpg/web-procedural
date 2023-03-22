<?php 
session_start();
if(!isset($_SESSION["login"])){
    header("Location:login.php");
    exit;
}
require 'functions.php';

    //ambil data di url
    $id = $_GET["id"];
    
    //query data mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

    //cek tombol sdh ditekan atau belum
    if (isset($_POST["submit"])){

       //cek apakkah data berhasil diupdate
    if ( ubah($_POST) > 0 ){
        echo "
        <script>
            alert('data berhasil diupdate');
            document.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal update');
            document.location.href='index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update data mahasiswa</title>
    </head>
    <body>
        <h1>Update data mahasiswa</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
            <ul>
                <li>
                    <label for="nim">NIM :</label>
                    <input type="text" name="nim" id="nim" value="<?= $mhs["nim"]; ?>">
                </li>
                <li>
                    <label for="nama">Nama :</label>    
                    <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
                </li>
                <li>
                    <label for="email">Email :</label>
                    <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
                </li>
                <li>
                    <label for="jurusan">Jurusan :</label>
                    <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
                </li>
                <li>
                    <label for ="gambar">Gambar :</label>
                    <img src="img/<?= $mhs['gambar'];?>" alt="gambar" width="60" height="70">
                    <input type ="file" name="gambar" id="gambar">
                </li>
                <li>
                    <button type="submit" name="submit">Update</button>
                </li>
            </ul>
        </form>

    </body>
</html>