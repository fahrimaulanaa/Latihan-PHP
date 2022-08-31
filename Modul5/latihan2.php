<?php
function luas_lingkaran($jari){
    return 3.14 * $jari * $jari;
}

function luas_persegi($sisi){
    $luas = $sisi * $sisi;
    return $luas;
}

//pemanggilan fungsi luas lingkaran
$r = 10;
echo "luas lingkaran dengan jari jari $r = ";
echo luas_lingkaran($r);
echo "<br>";
echo "<hr>";

//pemanggilan fungsi luas persegi
$s = 10;
echo "luas persegi dengan sisi $s = ";
echo luas_persegi($s);
?>