<?php
    //koneksi ke database
    $conn = mysqli_connect
    ("localhost","root","","phpdasar");
    
    //ambil data dari tabel mahasiswa
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    
    //var_dump($result);
    // if( !$result ){
    //     echo mysqli_error($conn);
    // }

    /*ambil data (fetch) mahasiswa dari object result 
     mysqli_fecth_row() | mengembalikan array numeric
     mysqli_fecth_assoc() | mengembalikan array associative
     mysqli_fetch_array() | mengembalikan array numeric + associative (kelemahan : double data)
     mysqli_fetch_object() | mengembalikan nilai dengan -> */

    // while ( $mhs = mysqli_fetch_assoc($result)) {
    // var_dump($mhs);
    // }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Index Admin</title>
    </head>
    <body>
        
    <h1>Daftar Mahasiswa</h1>

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
    <?php while($row = mysqli_fetch_assoc($result)) { ?>

    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="#">ubah</a> | 
            <a href="#">hapus</a>
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