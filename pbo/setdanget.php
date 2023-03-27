<?php
    // set dan get bisa digunakan dengan magic method dengan __set() dan __get()

    // class parent
    class Produk {
        
        private   $judul,
                  $author,
                  $penerbit,
                  $harga,
                  $diskon = 0;

        public function __construct($judul = "judul", $author="penulis", $penerbit = "penerbit", $harga = 0,)
        {
            $this->judul = $judul;
            $this->author = $author;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            
        }

        //function setter dan getter judul
        public function setJudul($judul){
            $this->judul = $judul;
        }
        public function getJudul(){
            return $this->judul;
        }

        //function setter dan getter author
        public function setAuthor($author){
            $this->author = $author;
        }
        public function getAuthor(){
            return $this->author;
        }

        //function setter dan getter penerbit
        public function setPenerbit($penerbit){
            $this->penerbit = $penerbit;
        }
        public function getPenerbit(){
            return $this->penerbit;
        }

        //function setter dan getter harga
        public function setHarga($harga){
            $this->harga = $harga;
        }
        public function getHarga(){
            return $this->harga - ($this->harga * $this->diskon / 100);
        }
        
        //function setter dan getter diskon
        public function setDiskon($diskon){
            $this->diskon = $diskon;
        }
        public function getDiskon(){
            return $this->diskon;
        }
        
        public function getLabel(){
            return "$this->author, $this->penerbit";
        }
    
        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }

    } 

    // class child komik 
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

    // class child game
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
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setAuthor("enjel");
echo $produk1->getAuthor();

?>