<!DOCTYPE html>
<html>
    <head>
        <title>POST</title>
    </head>
    <body>
        <?php if( isset($_POST["nama"])) { ?>
        <h1>SELAMAT DATANG , <?= $_POST["nama"]; ?>!</h1>
        <?php } ?>
        <!--action boleh dikosongkan, kalau kosong berarti program hanya akan di eksekusi di halaman ini
        isi action sebelumnya tadi adalah : post2.php -->
    <form action="" method="post">
        Masukkan Nama : 
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">kirim!</button>
    </form>

    </body>
</html>