<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kita Bantu</title>
</head>
<body>
    <h1>Kita Bantu</h1>
    <h2>Login Relawan</h2>
    <form action="proses_login_member.php" method="POST">
        Email:<br>
        <input type="email" name="email" required>
        <br><br>
        Password:<br>
        <input type="password" name="password" required>
        <br><br>

        <input type="submit" value="Login">
    </form>
    <br>


    <h2>Daftar Relawan</h2>
    <form action="proses_daftar_member.php" method="POST">
        Username:<br>
        <input type="text" name="username" required>
        <br><br>
        Email:<br>
        <input type="email" name="email" required>
        <br><br>
        Password:<br>
        <input type="password" name="password" required>
        <br><br>

        <input type="submit" value="Daftar">
    </form>

</body>
</html>