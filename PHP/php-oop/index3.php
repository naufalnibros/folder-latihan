<?php

// metode set && metode get

//class
class robot{

  public $suara;

  // metode set
  public function set_bersuara($suaranya){
    $this->suara = $suaranya;
  }

  //metode get
  public function get_bersuara(){
    return $this->suara;
  }

}

//memanggil
$objek_robot = new robot;

$objek_robot->set_bersuara("Ngikkk.. Ngook..!");

echo "suara robotnyaa!! ==> ". $objek_robot->get_bersuara();

 ?>
