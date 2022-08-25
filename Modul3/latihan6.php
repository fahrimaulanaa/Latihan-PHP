<?php
$tahun = date("Y");
$kabisat = ($tahun % 4 == 0) ? "Kabisat" : "Bukan kabisat";
echo "Tahun $tahun adalah $kabisat";
?>