<?php
$angka_a = 10;
$angka_b = 2;

$kali = $angka_a * $angka_b;
$bagi = $angka_a / $angka_b;
$tambah = $angka_a + $angka_b;
$kurang = $angka_a - $angka_b;
$modulus = $angka_a % $angka_b;

echo "<h3> Hasil Operasi Menggunakan Operator Aritmatika </h3>";
echo "<p> Variabel angka 1 : $angka_a </p>";
echo "<p> Variabel angka 2 : $angka_b </p>";
echo "<hr>";
echo "Hasil perkalian $angka_a dan $angka_b adalah $kali <br>";
echo "Hasil pembagian $angka_a dan $angka_b adalah $bagi <br>";
echo "Hasil penjumlahan $angka_a dan $angka_b adalah $tambah <br>";
echo "Hasil pengurangan $angka_a dan $angka_b adalah $kurang <br>";
echo "Hasil sisa bagi $angka_a dan $angka_b adalah $modulus <br>";
?>