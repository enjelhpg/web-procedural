<?php
    class Game extends Produk implements InfoProduk {
        public $waktuMain;
    
        public function __construct($judul = "judul", $author="penulis", $penerbit = "penerbit", 
        $harga = 0, $waktuMain = 0)
        {
            parent::__construct($judul, $author, $penerbit, $harga);
            $this->waktuMain = $waktuMain;
        }

        public function getInfo() {
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }
    
        public function getInfoProduk()
        {
            $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
            return $str;  
        }
    }
?>