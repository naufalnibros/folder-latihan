<?php

  //require_once 'robot.php';
  //require_once 'robot_hewan.php';
  //require_once 'manusia.php';

  //autoload class ==> (materi terakhir) cara memanggil beberapa class dalam satu folder sekaligus
  spl_autoload_register(function ($class_name) {
    require_once  $class_name. '.php';
  });

  $robot_1 = new robot('ngiiik ngokkk ', 34);
//  $robot_2 = new robot;

  echo "suara robot ". $robot_1->get_suara(). "<br>";

  //$robot_1->set_berat(34); ==> mengubah nilai kembalian pada konstruktor
  echo "berat ". $robot_1->get_berat();

//  $robot_2->set_suara("wakk wakkk");
//  echo "suara robot ". $robot_2->get_suara();

  echo "<br><br>";

  //--------- cara memanggil class inheritance

  $robot_burung = new robotHewan("wuaaak wuaakk", 400);
  echo $robot_burung->get_suara(). "<br>";
  echo $robot_burung->get_berat();

  echo "<br><br>";

  $burung = new robotHewan("wuaaak wuaakk", 400);
  $burung->get_terbang();

  //--------------- memanggil overriding
  echo $burung->get_suara();


  echo "<br><br>testing_self()<br>";
  //--------------- memanggil self dan parent
  echo $burung->testing_self();
  echo "<br>testing_parent()<br>";
  echo $burung->testing_parent();


  echo "<br><br>static<br>";
  //--------------- memanggil static ==> cara memanggil fungsi atau properti tanpa memanggil objek-nya
  manusia::bersuara();
  echo manusia::$suara_manusia;


  echo "<br><br>method chaining<br>";
  //--------------- memanggil method chaining ==> cara memanggil beberapa metode sekaligus
  $objek_manusia = new manusia;

  $objek_manusia->set_suara("hai hai he hehe eheh")->set_berat(34); // ----> menggunakan metode chaining
  // $objek_manusia->set_berat(34); --> jika tanpa menggunakan metode chaining
  echo $objek_manusia->suara." - ".$objek_manusia->berat;

 ?>
