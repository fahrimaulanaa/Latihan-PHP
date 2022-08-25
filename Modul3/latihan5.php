<?php
$day = date ("D");
switch ($day) {
    case "Senin":
        echo "Hari ini hari Senin";
        break;
    case "Selasa":
        echo "Hari ini hari Selasa";
        break;
    case "Rabu":
        echo "Hari ini hari Rabu";
        break;
    case "Kamis":
        echo "Hari ini hari Kamis";
        break;
    case "Jumat":
        echo "Hari ini hari Jumat";
        break;
    case "Sabtu":
        echo "Hari ini hari Sabtu";
        break;
    case "Minggu":
        echo "Hari ini hari Minggu";
        break;
    default:
        echo "Hari ini tidak ada di minggu";
        break;
}
echo "<br>";
echo "sekarang hari <b>".$day."</b>";
?>