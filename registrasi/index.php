<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location:login.php");
    exit;
}

    require 'functions.php';
    // pagination
    //limit artinya tampilkan hanya 2 data dari index ke 1
    // konfigurasi
    // total halaman = total data / perhalaman;
    $jumlahdataperhalaman = 3;
    $jumlahdata = count(query("SELECT * FROM mahasiswa"));
    $jumlahhalaman = $jumlahdata/$jumlahdataperhalaman;


    $mahasiswa = query ("SELECT * FROM mahasiswa ORDER BY nim ASC LIMIT 0,$jumlahdataperhalaman");

    //jika tombol cari ditekan
    if (isset($_POST["cari"])){
        $mahasiswa = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Index Admin</title>
    </head>
    <body>
        
<a href="logout.php">Logout</a>

    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="30" autofocus placeholder="Input keyword pencarian..." autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>

    <a href="#"></a>

    <br>
    <table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>No. </th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1;  ?>
    <?php foreach($mahasiswa as $row) { ?>

    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"];?>">ubah</a> | 
            <a href="hapus.php?id=<?= $row["id"];?>"
            onclick="return confirm('yaqueen?');">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"];?>" width="60" height="70"></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>

    <?php $i++; ?>
    <?php } ?>

    </table>
    </body>
</html>