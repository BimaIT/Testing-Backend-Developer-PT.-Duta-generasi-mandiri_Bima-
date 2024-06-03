<?php
$arr = [12, 9, 30, "A", "M", 99, 82, "J", "N", "B"];

// Pisahkan array menjadi dua bagian: string dan angka
$strings = array_filter($arr, 'is_string');
$numbers = array_filter($arr, 'is_numeric');

// Urutkan masing-masing bagian
sort($strings);
sort($numbers);

// Gabungkan kembali dengan string di depan dan angka di belakang
$sortedArr = array_merge($strings, $numbers);

print_r($sortedArr);
?>