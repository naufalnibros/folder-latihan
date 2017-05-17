<?php

require_once 'robot.php';

/**
 * INHERITANCE
 */
class RobotHewan extends robot
{
  public function get_terbang(){
    echo "saya hewan udara, Saya bisa terbang!!!<br>";
  }

  //overriding => mengubah nilai pada function parent nya
  public function get_suara(){
    return "cek overriding ". $this->suara;
  }

  public function testing_self(){
    return self::get_suara();
  }

  public function testing_parent(){
    return parent::get_suara();
  }

}


 ?>
