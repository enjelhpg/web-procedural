<?php
    /*Belajar PHP Dasar - ARRAY (Cara ini untuk menampilkan array ke user)
        - harus menggunakan pengulangan : for | foreach
    */

$shazam = [1,2,3,4,5,6,7,8,9,10];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Array</title>
        <style>
            .kotak {
                width: 50px;
                height: 50px;
                background-color: salmon;
                text-align: center;
                line-height: 50px;
                margin: 3px;
                float: left;
                transition: 1s;
            }
            .kotak:hover {
                transform: rotate(360deg);
                border-radius: 50%;
            }
            .clear {clear : both; }
        </style>
    </head>
    <body>
        <?php for($i = 0; $i < count($shazam) ; $i++ ) {?>
            <div class="kotak"><?php echo $shazam [$i]; ?></div>
        <?php } ?>
        
<div class="clear"> </div>

        <?php foreach($shazam as $s){ ?>
            <div class="kotak"><?php echo $s; ?></div>
            <?php } ?>

<div class="clear"></div>

            <?php foreach($shazam as $a): ?>
                <div class="kotak"><?php echo $a; ?></div>
                <?php endforeach; ?>

    </body>
</html>