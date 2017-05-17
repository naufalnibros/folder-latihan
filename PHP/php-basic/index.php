<?php
// ini adalah komentar

//membuat nama variabel pada PHP
$_test = "kalimat pertama -";
$test = 'Kalimat kedua -';
//---- tipe data string ----//
echo $_test." test percobaan<br>";
echo $test." test percobaan kedua<br>";
echo "menampilkan nama var ".'\$_test<br>';
echo "menampilkan nama var2".'\$test';
echo "<br>";
//tipe data Number
//--- integer & float ----//
$angka  = 2000;
$angka2 = 700;
echo "nilai penjumlahan dari variabel $angka dan $angka2 adalah = ";
echo $angka + $angka2;
echo "<br>";
$angka_float = 30.456;
echo "contoh penjumlahana angka float $angka2 + $angka_float = ";
echo $angka2 + $angka_float;
echo "<br>";
//---- operator matematik ----//
//--> + - * / % ++ -- += -=
//ex. += ==> $angka = $angka + $angka2;
//ex. -= ==> $angka = $angka - $angka2;

//--- math method ---//
//round() ==> membulatkan angka ke nilai terdekat - rand(min, max) ==> u/ mencari nilai acak
//max(var, var1, var2, var3) - min(var, var1, var2, var3)

//---- string method ----//
//strlen() ==> menghitung jumlah string
$teks = "hai semuanya, selamat datang"; // ada 28
echo $teks." ==> berapa jumlah string = ";
echo strlen($teks);
//str_word_count() ==> menghitung jumlah kata pada string
echo "<br>";
echo $teks." ==> berapa jumlah kata dalam string = ";
echo str_word_count($teks);
//substr_replace(find. replace, string)
echo "<br>";
echo $teks." ==> jika kalimat ini di replace menadi = ";
echo str_replace("hai", "hallo", $teks);
//str_repeat(text, time)
echo "<br>";
echo $teks." ==> me-repeat sebanyak 5x ==> ";
echo str_repeat($teks." | ", 5);
//variasi : echo str_repeat(str_replace("hai", "hallo", $teks), 5);

echo "<br><br>";
//---- tipe data array ----//
//cara penulisan:
$teks_arr = array('nibros','ainun','alfin'); //ex.1
$teks_ar  = ['tikus', 'kucing', 'koala']; //ex.2
//cara memberikan output:
print_r($teks_arr); //ex.1
echo "<br>";
print_r($teks_ar);
echo "<br>";
echo $teks_arr[1];
echo "<br>";
echo $teks_ar[2];
echo "<br>";
//---- Metode Array ----//
$teks_arr = ['angsa','kucing','ayam','bebek','angsa'];
//array_unique() ==> u/ mencari yang unik unik
print_r(array_unique($teks_arr));
echo "<br>";
//array_reverse() ==> membalik urutan array
print_r(array_reverse($teks_arr));
echo "<br>";
//shuffle() ==> Mengacak
shuffle($teks_arr);
print_r($teks_arr);
echo "<br>";
//count() ==> menguji berapa isi kotak
echo count($teks_arr);
echo "<br>";
//sort() ==> mengurutkan nilai sesuai dg tipe data
sort($teks_arr);
print_r($teks_arr);
echo "<br><br>";
//----- Associative Array -----//
//  key => nilai/isi

$data = array('nama'  => 'Naufal',
              'umur'  => 18 ,
              'kerja' => 'programmer'
        );
//menampilkan array asso...
print_r($data);
echo "<br>Nama : ".$data['nama'];
//mengubah nilai Array
$data['nama'] = "Naufal Nibros";
echo "<br>Nama Lengkap : ".$data['nama'];
//------ Metode Associative Array ------
//array_values() ==> merubah key index menjadi nomor Index
echo "<br>contoh array_values()<br>";
print_r(array_values($data));
//array_keys() ==> menemukan key dengan index array
echo "<br>contoh array_keys()<br>";
print_r(array_keys($data));
//array_merge() ==> menggabungkan beberapa Array
$data2 = array('istri'  => 'ainun',
               'laptop' => 'MacBook Air'
        );
echo "<br>contoh array_merge()<br>";
print_r(array_merge($data, $data2));
echo "<br><br>";

//------ Array Multi Dimensi //------
$data3 = array(
              array("naufal", "programmer", 19),
              array("nibros", "designer", 18),
              array("tika", "developer", 21)
          );
          print_r($data3);
// index array multi Dimensi --->>
/*
    00 01 02
    10 11 12
    20 21 22
*/
echo "<br>memanggil index array [0][1]<br>";
$data[0][1] = "Senior Web Developer"; //programmer ==> Senior Web Developer
echo $data[0][1];
echo "<br><br>";

// ----------- Pengulangan // -----------
// for(variabelAwal(mulai); Batas(syarat); Perubahan){}

for ($i=0; $i <5; $i++) {
    echo "Belajar Koding Gampang $i <br>";
}
echo "<br><br>";

// ----------- Mengeluarkan Array // -----------
$hewan = ['kucing','tikus','bebek','ayam','ikan','kelinci'];
//Menggunakan for(){}
for ($i=0; $i < count($hewan); $i++) {
  echo "index ke-$i adalah ".$hewan[$i];
  echo "<br>";
}
echo "<br><br>Menggunakan foreach(){}<br>";
//Menggunakan foreach(){}
foreach ($hewan as $x ) {
  echo $x;
  echo "<br>";
}
echo "<br><br>";
// ----------- Mengeluarkan Associative Array // -----------
foreach ($hewan as $key => $value) {
  echo $key." ".$value."  ";
}
echo "<br><br>";
//------ while & do while //------
$a = 0;
while ($a < count($hewan)){
  echo $hewan[$a]." urutan ke-$a <br>";
  $a++;
}
echo "<br><br>";
$b = 5;
do {
  echo "Percobban sifat do-while <br>";
  echo $hewan[$b];
  $b++;
} while ($b < count($hewan));

// ------ tipe data boolean ------ //
$benar = true;
$salah = false;

// ----- if dan else ----- //
echo "<br><br> Pelajaran if else<br>";

$sandi = "namaku";

if ($sandi == "namaku") {
  echo "Selamat sandi anda benar";
}else {
  echo "Maaf sandi Anda salah";
}

echo "<br><br>Operator logika ==<br>";

//operator logika --> == === > >= < <= !=
//ex. === => operator ini menyeleksi bukan hanya "teks" nya tapi juga "tipe datanya"

$sandi = "12345";
$sandi2 = 12345;

if ($sandi == $sandi2) {
  echo "sandi benar";
}else {
  echo "sandi salah";
}

echo "<br><br>Operator logika ===<br>";

if ($sandi === $sandi2) {
  echo "sandi benar";
}else {
  echo "sandi salah";
}

echo "<br><br>else if<br>";

// ------ lebih dari satu syarat else if -----

$uang_saya = 1000;
$bayar     = 2000;
$uang_bapak= 3000;

if ($uang_saya > $bayar) {
  echo "sudah dibayar oleh saya";
} elseif ($uang_bapak > $bayar) {
  echo "pinjam uang bapak";
} else {
  echo "belum dibayar!!";
}

echo "<br><br>nested if<br>";

// ----- nested if/if bercabang -----

$uang_bapak = 40000;

if ($uang_saya > $bayar) {
  echo "sudah dibayar oleh saya";
} elseif ($uang_bapak > $bayar) {
  echo "pinjam uang bapak";
  if ($uang_bapak >= $bayar * 2) {
    echo "<br>bapak beli dua";
  }
} else {
  echo "belum dibayar!!";
}

// dan juga atau
// && juga ||

echo "<br><br>switch case<br>";

// ------ switch case ----- //

$namaku = 'naufal';

switch ($namaku) {
  case 'nibros':
    echo 'namanya nibros';
    break;
  case 'naufal':
    echo "namanya naufal";
    break;
  default:
    echo "Dia tidak punya nama";
    break;
}

echo "<br><br>function pada php<br>";

// ------ function pada php ------ //

function tulisan()
{
  echo "-------------- ";
  echo "belajar koding";
  echo " --------------";
}

function jarak() {
  echo "<br>";
}

tulisan();
jarak();
tulisan();
jarak();
tulisan();
jarak();
jarak();
echo "Parameter pada function php";
jarak();

// ------- Parameter pada fungsi PHP
function tampilan($teks, $angka)
{
  echo "Belajar ". $teks ." ".$angka." <br>";
}

tampilan("Koding", 31);
tampilan("Mengemudi", 14);
tampilan("Memasak", 351);

jarak();
jarak();

// ------- Metode return pada PHP
echo "Metode return<br>";

function penjumlahan($a,$b)
{
  $hasil = $a + $b;
  return $hasil;
}

echo "jumlahnya adalah ".penjumlahan(5,8)*10;

jarak();
jarak();

// ------- Scope ----------
echo "Scope<br>";

$x = 200;
$y = 40;

function jumlahkan()
{
  //atau bisa juga gunakan ini
//  $z = $GLOBALS['x'] + $GLOBALS['y'];

  global $x, $y;
  $z = $x + $y;
  return $z;
}

echo jumlahkan();

jarak();
jarak();

// ------- anonymous faunction ----------
//ex 1
$tulis = function(){
  echo "anonymous function 1";
};

$tulis();

jarak();

//ex 2
$tulisanku = function($teksnya){
  echo $teksnya;
};

$tulisanku('anonymous function 2');

jarak();

$tulisanku = function($teksnya){
  echo $teksnya;
};

$pengalihan = $tulisanku;

$pengalihan('anonymous function 3');

jarak();
jarak();

// --------- callback function --------

function berbicara($callback){
  echo "HAIIIIIIII...!!!<br>";

  if ( is_callable($callback)) //menguji apakah dia fungsi
  {
    call_user_func($callback, 'Salam kenal...');
  }else {
    echo "bukan function";
  }
}

$menjawab = function($teks){
  echo $teks;
};

berbicara($menjawab);
 ?>
