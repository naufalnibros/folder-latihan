<?php

//---------------------------
//-------- OOP - PHP --------
//---------------------------

//class
class robot{

  //properti
  public $suara = "ngik-ngikk!";
  public $berat = 34;

}

$robot1 = new robot;
echo "suara robot : ". $robot1 -> suara ." beratnya robot ". $robot1 -> berat;

 ?>
