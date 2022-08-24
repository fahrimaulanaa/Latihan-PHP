<?php
$arrNilai = array ("Ani" => 80, "Otim" => 90, "Ana" => 75, "Budi" => 85);
echo $arrNilai['Ani'];
echo "<br>";
echo $arrNilai['Otim'];
echo "<br>";

foreach ($arrNilai as $nama => $nilai) {
    echo "<br>";
    echo "Nilai $nama = $nilai";
}
?>