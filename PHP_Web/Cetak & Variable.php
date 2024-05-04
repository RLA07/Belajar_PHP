<?php

$txt1 = "Tutorial PHP";
$txt2 = "mahasiswa";
$x = 5;
$y = 4;
$harga = 100000;

echo "<h2>" . $txt1 . "</h2>";
echo "Saya adalah seorang " . $txt2 . "<br>";
echo $x + $y, "<br>";
printf("Saya adalah seorang %s<br>", $txt2);

// Jika kita cetak dengan echo:
echo "Harganya adalah Rp $harga <br>";
// Jika kita cetak dengan printf
printf("Harganya adalah Rp %.2f", $harga);

// Mencetak tanda kutip
echo '<br>hari ini hari jum\'at';
?>