<?php
    
    class Produk {
        
        public  $judul,
                $author,
                $penerbit,
                $harga;

        public function __construct($judul = "judul", $author="penulis", $penerbit = "penerbit", $harga = 0)
        {
            //method ini otomatis dijalankan otomatis setiap dibuat instant setiap class baru
            $this->judul = $judul;
            $this->author = $author;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            
        }
        
        public function getLabel(){
            return "$this->author, $this->penerbit";
        }
    }

$produk1 = new Produk("Naruto","Masa Sih","Gramed",200000);

$produk2 = new Produk("Uncharted","Neil Drucman","Sony Comp",4000000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();

?>