<?php
    /* semua kelas turunan harus mengimplementasikan method abstrak yang ada dikelas abstraknya
    kelas abstrak boleh memiliki property/method reguler
    kelas abstrak boleh memiliki property / static method 
    
    alasan:
    * merepresentasikan ide atau konsep dasar
    * composition over inheritance
    * salah satu cra menerapkan polimorphismm
    * sentralisasi logic 
    * mempermudah pengerjaan tim
    */

    //contoh studi kasus abstraksi dengan kasus yang sdh pernah dibuat sebelumnya
abstract class Produk {
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
    
    abstract public function getInfoProduk();
    
    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

} 

class Komik extends Produk {      
    public $jmlHalaman;

    public function __construct($judul = "judul", $author="penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $author, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
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
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;  
    }
}

class CetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[]= $produk;
    }

    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
?>