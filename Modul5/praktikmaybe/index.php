<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:beranda.php");
}
include("function.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>LOGIN PAGE</title>
</head>

<body>
    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "wrong") {
            echo "<h3>Username atau Password salah!</h3>";
        }
    }
    if (isset($_GET['notif'])) {
        if ($_GET['notif'] == "logout") {
            echo "<h3>Anda berhasil logout!</h3>";
        }
    }
    if (isset($_GET['submit'])) {
        echo do_login($_POST['username'], $_POST['password']);
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" name="submit" value="SIGN IN">
    </form>
</body>

</html>