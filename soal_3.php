<?php
function countAndSortLetters($input) {
    // Menghapus spasi dan mengubah huruf menjadi lowercase
    $input = strtolower(str_replace(' ', '', $input));
    
    // Menghitung jumlah kemunculan huruf
    $lettersCount = array_count_values(str_split($input));
    
    // Mengurutkan huruf berdasarkan abjad
    asort($lettersCount);

    return $lettersCount;
}

// Contoh penggunaan fungsi
$userInput1 = "Hello Mr.Bima";
$sortedResult = countAndSortLetters($userInput1);
echo "$userInput1.<br>";
echo "Hasil pengurutan huruf:\n";
print_r($sortedResult);
echo "<br>";
$userInput2 = "Bima Kusuma Jayuspanda";
$sortedResult = countAndSortLetters($userInput2);
echo "<br>$userInput2.<br>";
echo "Hasil pengurutan huruf:\n";
print_r($sortedResult);

?>