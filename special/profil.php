<?php
session_start();
include("function.php");
echo check_login();

echo "<h1>Selamat datang</h1><br>";
echo "<h3><a href='profil.php'>Edit Profil</a></h3>";
echo "<h3><a href='logout.php'>Logout!</a></h3>";
echo "<hr>";
echo "<br>";

echo "<h2>Nama saya Fahri Maulana </h2>";
echo "<h2>NIM saya 16.01.53.0109 </h2>";
?>