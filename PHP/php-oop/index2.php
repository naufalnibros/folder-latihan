<?php

// class
class robot{

  //properti
  public $suara = "ngik-ngik";
  public $berat = 23;

  //metode
  public function bersuara(){
    echo "suara robotnya... ". $this->suara;
  }

  public function berat_robot(){
    return $this->berat;
  }

  public function kasih_baris(){
    echo "<br>";
  }

}

//memanggilnya
$robot1 = new robot;
$robot1->bersuara();
$robot1->kasih_baris();
echo $robot1->berat_robot();

 ?>
