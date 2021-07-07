<?php
    include("../config.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dasboard Relawan</title>
</head>
<body>
    <center>
        <hr>
            <a href="../member">Dasboard</a>
            <a href="profil.php?id_member=<?php echo $_SESSION['id_member'];?>">Profil</a>
            <a href="gamelist.php?id_member=<?php echo $_SESSION['id_member'];?>">Acara</a>
            <a href="logout.php?">Logout</a>
        <hr>
    
    </center>
    Selamat datang pahlawan relawan <?php echo $_SESSION['username'];?>

</body>
</html>