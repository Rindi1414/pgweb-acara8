<!DOCTYPE html>
<html>
<?php
// Membuat array
$numbers = array(1, 2, 3, 4, 5, 7, 9, 11);

// Iterasi dan menampilkan nilai kecuali 4 dan 5
foreach ($numbers as $number) {
    if ($number == 4 || $number == 5) {
        continue; // Melanjutkan iterasi ke nilai selanjutnya jika angka adalah 4 atau 5
    }
    echo $number . "<br>";
}
?>   
</body>
</html>