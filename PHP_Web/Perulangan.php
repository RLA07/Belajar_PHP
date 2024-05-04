<?php

// Perulangan For
for($i = 0; $i < 10; $i++){
    echo "<h2>Ini perulangan ke-$i</h2>";
}


echo "<hr>";
// Perulangan While
$ulangi = 0;

while($ulangi <= 10){
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}


echo "<hr>";
// Perulangan Do/While
$ulangi = 10;
do {
    echo "<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
} while ($ulangi > 0);



echo "<hr>";
// Perulangan Foreach
$books = [
    "Panduan Belajar PHP untuk Pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MySQL",
    "Membuat Chat Bot dengan PHP"
];

echo "<h5>Judul Buku PHP:</h5>";
echo "<ul>";
foreach($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ul>";


echo "<hr>";
// Perulangan Bersarang
$i = 0;
while($i < 10){
    for($j = 0; $j < 10; $j++){
        echo "Ini perulangan ke ($i, $j)<br>";
    }

    $i++;
}
?>