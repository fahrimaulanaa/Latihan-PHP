<?php
$arrWarna = array ("Blue", "Red", "Green", "Yellow");
echo "Menampilkan isi Array dengan for :  <br>";
for($i = 0; $i < count($arrWarna); $i++){
    echo "do you like <font color = $arrWarna[$i]>".$arrWarna[$i]."</font> ?<br>";
}
echo "<br>";

echo "Menampilkan Array dengan foreach : <br>";
foreach ($arrWarna as $warna) {
    echo "do you like <font color = $warna>".$warna."</font> ?<br>";
}
?>