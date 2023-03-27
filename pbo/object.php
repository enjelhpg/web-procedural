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

    class CetakInfoProduk {
        public function cetak(Produk $produk){
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            return $str;
        }
    }

//hasil dari method get label kelas produk
$produk1 = new Produk("Naruto","Masa Sih","Gramed",200000);
$produk2 = new Produk("Uncharted","Neil Drucman","Sony Comp",4000000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

//hasil dari method get label kelas cetakinfoproduk
$infoproduk1 = new CetakInfoProduk();
echo $infoproduk1->cetak($produk1);

?>