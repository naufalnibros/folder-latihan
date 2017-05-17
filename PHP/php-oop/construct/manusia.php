<?php

class manusia{
  //contoh static
  static $suara_manusia = 'ha hah ahah ahaha';

  public $suara;
  public $berat;

  public static function bersuara(){
    echo "halo halo halo<br>";
  }

  //awal contoh method chaining
  public function set_suara($suaranya){
    $this->suara = $suaranya;
    return $this; //menambakan keyword this, gunanya untuk mengembalikan objeknya yaitu '$objek_manusia'
  }

  public function set_berat($beratnya){
    $this->berat = $beratnya;
  }
  //akhir contoh method chaining

}

 ?>
