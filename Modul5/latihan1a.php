<?php
function cetak_ganjil ($awal, $akhir) {
    for ($i = $awal; $i <= $akhir; $i++) {
        if ($i % 2 == 1) {
            echo "$i ";
        }
    }
}

function cetak_genap ($awal, $akhir) {
    for ($i = $awal; $i <= $akhir; $i++) {
        if ($i % 2 == 0) {
            echo "$i ";
        }
    }
}

//pemanggilan fungsi
$a = 10;
$b = 50;
echo "<b>Bilangan ganjil dari $a sampai $b adalah: </b><br>";
cetak_ganjil($a, $b);
echo "<br>";
echo "<hr>";

//pemanggilan fungsi genap
$a = 10;
$b = 50;
echo "<b>Bilangan genap dari $a sampai $b adalah: </b><br>";
cetak_genap($a, $b);
echo "<br>";
echo "<hr>";
?>