<?php
//membuat method di kelas child yang memiliki nama sama dengan method parent class
//melakukan function yang sama tapi dengan beberapa keadaan yang berbeda.

    class Produk {
        
        public  $judul,
                $author,
                $penerbit,
                $harga;

        public function __construct($judul = "judul", $author="penulis", $penerbit = "penerbit", $harga = 0,)
        {
            $this->judul = $judul;
            $this->author = $author;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            
        }
        
        public function getLabel(){
            return "$this->author, $this->penerbit";
        }
    
        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }

    } 

// keyword parent adalah keyword untuk mengambil property atau method dari kelas parent
    class Komik extends Produk {
        
        public $jmlHalaman;

        public function __construct($judul = "judul", $author="penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
        {
            parent::__construct($judul, $author, $penerbit, $harga);

            $this->jmlHalaman = $jmlHalaman;
        }

        public function getInfoProduk()
        {
            $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
            return $str;
        }

    }

    class Game extends Produk {
        public $waktuMain;

        public function __construct($judul = "judul", $author="penulis", $penerbit = "penerbit", 
        $harga = 0, $waktuMain = 0)
        {
            parent::__construct($judul, $author, $penerbit, $harga);

            $this->waktuMain = $waktuMain;
        }

        public function getInfoProduk()
        {
            $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
            return $str;  
        }
    }

    class CetakInfoProduk {
        public function cetak( Produk $produk ){
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            return $str;
        }
    }

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";

?>