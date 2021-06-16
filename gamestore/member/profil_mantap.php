<?php
    include("../config.php");
    session_start();
    $id_member = $_GET['id_member'];
    $data = mysqli_query($mysqli, "SELECT * FROM akunmember WHERE id_member='$id_member'");
    $dr = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Relawan</title>
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

    <h1>Lihat/Edit Profil Relawan</h1>

    <form action="proses_edit_profil.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_member" value="<?php echo $dr['id_member']; ?>">
        Nama Lengkap:<br>
        <input type="text" name="nama_lengkap" value="<?php echo $dr['nama_lengkap']; ?>"><br><br>
        Username:<br>
        <input type="text" name="username" value="<?php echo $dr['username'];?>"><br><br>
        Email:<br>
        <?php echo $dr['email']; ?><br><br>
        Tempat Lahir:<br>
        <input type="text" name="tempat_lahir" value="<?php echo $dr['tempat_lahir'];?>"><br><br>
        Tanggal Lahir:<br>
        <input type="text" name="tanggal_lahir" value="<?php echo $dr['tanggal_lahir'];?>">Format: YYYY-BB-HH<br><br>
        Alamat:<br>
        <textarea name="alamat"><?php echo $dr['alamat'];?></textarea><br><br>
        Nomor Handphone: <br>
        <input type="text" name="no_hp" value="<?php echo $dr['no_hp'];?>"><br><br>
        Foto<br>
        <img src="<?php echo $dr['foto'];?>"><br>
        <input type="file" name="foto"><br><br>

        <input type="submit" value="Edit">
    </form>

</body>
</html>