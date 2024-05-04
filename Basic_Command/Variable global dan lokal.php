<?php

$x = 5; // global variable
$y = 4;
function test() {
  global $x; // memasukkan variable global ke dalam local 
  $y = 7; // variable local
  static $z = 10; // penambahan static agar variable tidak dihapus
  echo "(Local)\n";
  echo "Variable x = $x \n";
  echo "Variable y = $y \n";
  echo "Variable z = $z \n\n";
  $x++; $y--; $z--;;

  $GLOBALS['r'] = $GLOBALS['x'] + $GLOBALS['y']; // penjumblahan pada variable global
}
test();

// ini adalah contoh varable global
echo "(Global)\n";
echo "Variable x = $x \n";
echo "Variable y = $y \n\n"; // Variable y yang diambil adalah variabel global, bukan variabel lokal
echo "Penjumlahan x + y (global) = $r";

test();
test();
test();
test();
?>
