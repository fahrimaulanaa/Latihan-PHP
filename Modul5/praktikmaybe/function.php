<?php
function do_login($username, $password){

    //cek kondisi jika username dan password salah
    if($username != "admin" || $password != "admin"){
        header("location:index.php?error=wrong");
    }

    //cel kondisi jika username dan password benar
    if($username == "admin" && $password == "admin"){
        $_SESSION['user'] = $username;
        $_SESSION['pass'] = $password;
        header("location:beranda.php");
    }
}

function check_login(){
    //cek kondisi login session
    if(!isset($_SESSION['username'])){
        header("location:index.php");
    }
}
?>