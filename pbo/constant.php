<?php
// identifier untuk simpan nilai
// nilainya tidak dapat berubah
// define() | const bedanya adalah define tidak bisa disimpan dalam kelas dan bersifat global sedangkan const bisa didalam kelas

/* define (konstanta harus capital)
   define('NAMA','ENJELHPG');
   echo NAMA;

   echo "<br>";

   const
   const UMUR = 19;
   echo UMUR;*/

/*class Coba {
    const NAMA = 'Enjel hpg';
}
echo Coba :: NAMA ;*/

/*contoh Magic Constant | caranya : echo __MgicConstant__;
*__LINE__
*__FILE__
*__DIR__
*__FUNCTION__
*__CLASS__
*__TRAIT__
*__METHOD__
*__NAMESPACE__
*/

// echo __FILE__;

/* cara memanggil untuk function
   function coba(){
       return __FUNCTION__;
   }
   echo coba();*/

//cara memanggil magic constant untuk class
class Coba{
    public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;
?>