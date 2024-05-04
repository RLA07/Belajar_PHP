<?php

// CARA MEMBUAT KONSTANTA
// membuat konstanta dengan fungsi define()
define('DB_SERVER', 'localhost');
define('DB_USER', 'petanikode');
define('DB_PASS', 'R4Hasia');
define('DB_NAME', 'belajar');

// membuat konstanta dengan kata kunci const
const API_KEY = "1234";

/*
// Mencoba mengubah nilai konstanta
const SEBUAH_NILAI = 5 // kita punya konstanta dengan nilai 5
// lalu kita ubah menjadi 10
SEBUAH_NILAI = 10 // <-- maka akan terjadi error di sini
*/

const nama = "Rangga Ayi Pratama";
echo "Nama : " . nama . "<br>";

define('NPM', '062330701526');

const Prodi = "D3 Teknik Komputer";
const Github = "<a href='https://github.com/RLA07'>https://github.com/RLA07</a>";

// cetak nilai konstanta
echo "NPM: " . NPM . "<br/>";
echo "Program Studi: " . Prodi . "<br/>";
echo "Github: " . Github . "<br/>";
?>