<?php
    include("../config.php");
    session_start();
    $id_member = $_GET['id_member'];
    $data = mysqli_query($mysqli, "SELECT id_game, nama_game FROM gamelist");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Acara</title>
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
    <br>
    <h1>Daftar Acara</h1>
    <form action="proses_prapendaftaran_game.php" method="POST">
        Acara<br>
        <select name="gamelist">
            <?php
                while ($da = mysqli_fetch_array($data)){
            ?>
            <option value="<?php echo $da['id_game']; ?>"><?php echo $da['nama_game']; ?></option>
            <?php
                }
            ?>

        </select>
        <br>

        <input type="submit" value="Daftar">
    </form>
    
    

</body>
</html>