<?php
    //konsep kelas abstrak
    // sebuah kelas yang tidak dapat di instansiasi tidak bisa bikin object
    // kelas abstrak yang menjadi kelas sesungguhnya adalah kelas kelas turunannya
    // mendefinisikan interface untuk kelas lain yang menjadi turunannya
    // berperan sebagai kerangka dasar untuk eklas turunannya
    // harus punya minimal satu method abstrak
    // digunakan dalam pewarisan untuk memakssakan implementasi method abstrak yang sama untuk semua kelas turunannya

   //contoh kasus
   abstract class Buah {
    private $warna;
//kelas dan method abstrak hanya interfacenya saja implementasinya ada di kelas turunannya
    abstract public function makan();

    public function setWarna($warna){
        $this->warna = $warna;
    }
   } 

   class Apel extends Buah{
    public function makan(){
        //kunyah 
        //nyam..nyam..nyam
    }
   }

   class Jeruk extends Buah{
    public function makan(){
        //kupas
        //kunyah 
    }
   }

   $apel = new Apel();
   echo $apel->makan();

//    $buah = new Buah();
//    $buah->makan();

   //sepertinya buah bukan class yang bisa diinstansiasi
   //jadi kelas buah dijadikan kelas abstrak

   //membuat class abstrak adalah menambahkan abstrack

?>