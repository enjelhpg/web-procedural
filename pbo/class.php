<?php
    
    class Produk {
        
        public $judul = "judul",
        $author = "enjel",
        $penerbit = "erlangga",
        $harga = 200000;
        
        public function getLabel(){
            return "$this->author, $this->penerbit";
        }
    }

    

// $produk1 = new Produk();
// $produk1 ->judul = "naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "uncharted";
// $produk2->tambahProperty = "hahahahah";
// var_dump($produk2);

$produk3 = new Produk("Uncharted","Neil Drucman","Sony Comp",4000000);
//error karna harusnya diisi data 
$produk3->judul = "Naruto";
$produk3->author = "Masa sih";
$produk3->penerbit = "Gramed";
$produk3->harga = 3000000;

// echo "komik : $produk3->author, $produk3->penerbit";
// echo "<br>";
// echo $produk3->getLabel();
// echo "<br>";

$produk4 = new Produk("Uncharted","Neil Drucman","Sony Comp",4000000);
//error karna harusnya diisi data
$produk4->judul = "Uncharted";
$produk4->author = "Neil Drucman";
$produk4->penerbit = "erlangga";
$produk4->harga = "40000000";

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

?>