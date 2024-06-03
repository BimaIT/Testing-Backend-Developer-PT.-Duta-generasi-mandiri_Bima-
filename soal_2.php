<?php
function pattern_count($text, $pattern) {
    $textLength = strlen($text);
    $patternLength = strlen($pattern);
    $count = 0;

    for ($i = 0; $i <= $textLength - $patternLength; $i++) {
        $substring = substr($text, $i, $patternLength);
        if ($substring === $pattern) {
            $count++;
        }
    }

    return $count;
}

// Contoh penggunaan fungsi

$text = "abababab";
$pattern = "ab";
$result = pattern_count($text, $pattern);
echo "Jumlah pola '$pattern' dalam teks '$text' adalah: $result.<br><br> ";


$text = "Bima Kusuma Jayuspanda";
$pattern = "ma";
$result = pattern_count($text, $pattern);
echo "Jumlah pola '$pattern' dalam teks '$text' adalah: $result.<br><br>";

$text = "aaaaaa";
$pattern = "aa";
$result = pattern_count($text, $pattern);
echo "Jumlah pola '$pattern' dalam teks '$text' adalah: $result.<br>.<br>";

$text = "abababa";
$pattern = "aba";
$result = pattern_count($text, $pattern);
echo "Jumlah pola '$pattern' dalam teks '$text' adalah: $result.<br>.<br>";


?>