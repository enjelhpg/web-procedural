<?php
$idol = [
    [
        "nama" => "Jeonghan",
        "born" => "1995",
        "jk" => "namja",
        "hobby" => "napipopeta",
        "gambar" => "jihan1.jpg"
    ],
    [
        "nama" => "Scoups",
        "born" => "1995",
        "jk" => "namja",
        "hobby" => "angry",
        "gambar" => "jihan2.jpg"
    ],
    [
        "nama" => "Mingyu",
        "born" => "1997",
        "jk" => "namja",
        "hobby" => "mangan",
        "gambar" => "jihan3.jpeg"
    ]
];    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Case Array</title>
    </head>
    <body>
      <h1>SARANGHAE Yoon Jeonghan</h1>
    <?php foreach ($idol as $namchin) {?>
    <ul>
        <li><img src="img/<?= $namchin["gambar"];?>" width="70" height="90"></li>
        <li>Nama : <?= $namchin["nama"]; ?></li>
        <li>Born : <?= $namchin["born"]; ?></li>
        <li>JK : <?= $namchin["jk"]; ?></li>
        <li>Hobby : <?= $namchin["hobby"]; ?></li>
    </ul>
    <?php } ?>
    </body>
</html>