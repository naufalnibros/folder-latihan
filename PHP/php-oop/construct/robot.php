<?php

//class
class robot{

  //Ruang lingkup properti dan method
  // public - protected - private

  public $berat;
  public $suara;

  //konstruktor ==> secara otomatis konstruktor dipanggil saat membuat objek
  public function __construct($suara, $berat){
    $this->berat = "-hello world- ". $berat;
    $this->suara = "-hello world- ". $suara;
  }

  //suara
  public function set_suara($suara){
    $this->suara = $suara;
  }

  public function get_suara(){
    return $this->suara;
  }

  //berat
  public function set_berat($berat){
    $this->berat = $berat;
  }

  public function get_berat(){
    return $this->berat;
  }

}

 ?>
