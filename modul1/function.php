<?php
$nama = "Fahri Maulana";

function tampil_nama(){
    global $nama;
    echo "Nama Saya : " . $nama;
}

tampil_nama();
?>