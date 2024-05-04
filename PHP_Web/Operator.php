<?php

$a = 5;
$b = 2;
echo "<h2>Operator Matematika</h2>";
echo "<hr>";
// penjumlahan
$c = $a + $b;
echo "$a + $b = $c";
echo "<hr>";

// pengurangan
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";

// Perkalian
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";

// Pembagian
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";

// Sisa bagi
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";

// Pangkat
$c = $a ** $b;
echo "$a ** $b = $c";
echo "<hr>";


// Contoh lain
$speed = 83;
// ini operator aritmatika
$speed = $speed + 10; // maka nilai speed akan sama dengan 83 + 10 = 93
// ini operator penugasan
$speed += 10; // sekarang nilai speed akan menjadi 93 + 10 = 103


// Operator Increment dan Decrement
echo "<h3>Increment</h3>";
$score = 0;
$score++;
echo $score;
$score++;
echo $score;
$score++;
echo $score;
echo "<hr>";
echo "<h3>Decrement</h3>";
$score2 = 0;
$score2--;
echo $score2;
$score2--;
echo $score2;
$score2--;
echo $score2;
echo "<hr>";



echo "<h2>Operator Relasi</h2>";
// OPERATOR RELASI
$a = 6;
$b = 2;

// menggunakan operator relasi lebih besar
$c = $a > $b;
echo "$a > $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih kecil
$c = $a < $b;
echo "$a < $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih sama dengan
$c = $a == $b;
echo "$a == $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih tidak sama dengan
$c = $a != $b;
echo "$a != $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b: $c";
echo "<hr>";



echo "<h2>Operator Relasi</h2>";
// OPERATOR LOGIKA
$a = true;
$b = false;

// variabel $c akan bernilai false
$c = $a && $b;
printf("%b && %b = %b", $a,$b,$c);
echo "<hr>";

// variabel $c akan bernilai true
$c = $a || $b;
printf("%b || %b = %b", $a,$b,$c);
echo "<hr>";

// variabel $c akan bernilai false
$c = !$a;
printf("!%b = %b", $a, $c);
echo "<hr>";

echo "<h2>Operator Bitwise</h2>";
// OPERATOR BITWISE
$a = 60;
$b = 13;

// bitwise AND
$c = $a & $b;
echo "$a & $b = $c";
echo "<hr>";

// bitwise OR
$c = $a | $b;
echo "$a | $b = $c";
echo "<hr>";

// bitwise XOR
$c = $a ^ $b;
echo "$a ^ $b = $c";
echo "<hr>";

// Shift Left
$c = $a << $b;
echo "$a << $b = $c";
echo "<hr>";

// Shift Right
$c = $a >> $b;
echo "$a >> $b = $c";
echo "<hr>";


echo "<h2>Operator Ternary</h2>";
$suka = true;
// menggunakan operator ternary
$jawab = $suka ? "iya": "tidak";
// menampilkan jawaban
echo $jawab;
?>