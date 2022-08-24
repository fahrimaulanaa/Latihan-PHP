<?php
$arrbuah = array ("Mangga", "Apel", "Jeruk", "Anggur", "Pisang");
echo $arrbuah[0];  //Mangga
echo "<br>";
echo $arrbuah[3];  //Anggur

$arrwarna = array ("Merah", "Biru", "Hijau", "Kuning");
echo "<br>";
print_r($arrwarna);
echo "<br>";
foreach ($arrwarna as $warna) {
    echo "<br>";
    echo $warna;
}
?>