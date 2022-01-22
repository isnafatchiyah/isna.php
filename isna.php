<! DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Belajar PHP</title>
</head>
<body>

<?php
 
  
  // variabel pada php
  // tipe data -string-
  $nama = "Sekolah Koding";
  $nama2 = 'Bermain koding';
  
  echo "Selamat datang di $nama <br>";

  
  
 ///tipe data angka/number
// 1. Integer 2. Float

$angka = 1000;
$angka2 = 3;
$angka3 = 2.64;

//operator aritmatika
// + - * / % ++ --

//nama = nilai
//$angka = $angka + $angka2
//$angka += $angka2;

//math method
//round rand(min, max) max min
//echo "Angka hari ini adalah ". min($angka3, $angka, $angka2);

//---------- Math method ----------
//strlen && str_word_count
//str_replace(find,replace,string)
//str_repeat(text, times); str_shuffle(text)

$text = "Hai semuanya disini";
echo str_repeat (str_replace("Hai", "Halo" ,$text),5 );



?>


</body>
</html>
