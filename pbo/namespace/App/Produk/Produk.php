<?php
    Abstract class Produk {
        protected   $judul,
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
    
        public function setJudul($judul){
            $this->judul = $judul;
        }
        public function getJudul(){
            return $this->judul;
        }
    
        public function setAuthor($author){
            $this->author = $author;
        }
        public function getAuthor(){
            return $this->author;
        }
    
        public function setPenerbit($penerbit){
            $this->penerbit = $penerbit;
        }
        public function getPenerbit(){
            return $this->penerbit;
        }
    
        public function setHarga($harga){
            $this->harga = $harga;
        }
        public function getHarga(){
            return $this->harga - ($this->harga * $this->diskon / 100);
        }
    
        public function setDiskon($diskon){
            $this->diskon = $diskon;
        }
        public function getDiskon(){
            return $this->diskon;
        }
            
        public function getLabel(){
            return "$this->author, $this->penerbit";
        }
          
        abstract public function getInfo();   
    
    }
?>