<?php

// MEMBUAT VARIABEL
$nama_barang = "Minyak Goreng"; // Variabel String
$harga = 15000; // Variabel Numerik

$jenis_kelamin = 'L'; // tipe data char (karakter)
$nama_lengkap = "Rangga Ayi Pratama"; // tipe data string (teks)
$umur = 20; // tipe data integer
$berat = 50.3; // tipe data float
$tinggi = 165.2; // tipe data float
$menikah = false; // tipe data boolean

// Contoh penulisan tipe data array
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

// Ketiga variabel dibawah dianggap berbeda
$Belajar = "";
$BELAJAR = "";
$belajar = "";

// Konversi variabel
$a = "32";
$a = (int) $a; // ubah nilai a menjadi integer
$a = (float) $a; // ubah nilai a menjadi float
$a = (string) $a; // ubah nilai a menjadi string

// Menghapus variabel
// membuat variabel $tmp
$tmp = 2901;
// menghapus variabel $tmp
unset($tmp);


///////////////////////////////////////////////////////////////////////////


// MENCETAK ISI VARIABEL
echo "Ibu membeli $nama_barang seharga Rp $harga <br>"; //petik ganda
echo 'Ibu membeli ' . $nama_barang . 'seharga Rp ' . $harga; //petik tunggal

echo "<br><br>";

echo "Nama: $nama_lengkap<br>";
echo "Jenis Kelamin: $jenis_kelamin<br>";
echo "Umur: $umur tahun<br>";
echo "berat badan: $berat kg<br>";
echo "tinggi badan: $tinggi cm<br>";
echo "menikah: $menikah"; // akan kosong karena nilai flase berubah menjadi kosong dalam srting

echo "<br><br>";

echo $tmp; // mencoba mengakses variabel $tmp

?>