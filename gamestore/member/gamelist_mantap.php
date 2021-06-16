<?php
    include("../config.php");
    session_start();
    $id_member = $_GET['id_member'];
    $data = mysqli_query($mysqli, "SELECT a.nama_game, ra.id_game, ra.status, ra.id_prapendaftaran_game FROM prapendaftarangame ra JOIN gamelist a ON ra.id_game = a.id_game WHERE ra.id_member='$id_member'");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar/Hapus Acara</title>
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
    <h1>Acara</h1>
    <a href="prapendaftar_game.php?id_member=<?php echo $id_member; ?>">Daftar Acara</a>
    <table border>
        <tr>
            <th>No</th>
            <th>Acara</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <tr>
        <?php
            $no=1;
            while($dra = mysqli_fetch_array($data)){
                
            
        ?>
            <td><?php echo $no; ?></td>
            <td><?php echo $dra['nama_game']; ?></td>
            <td><?php 
                $s = $dra['status'];
                if($s == 0) echo "belum di konfirmasi";
                else if ($s == 1) echo "diterima";
                else echo "ditolak";
                 
                ?>
            </td>

            <td>
                <a href="hapus_game.php?id_prapendaftaran_game=<?php echo $dra['id_prapendaftaran_game']; ?>">Hapus</a>
            </td>
        </tr>
        <?php
        $no++;
            }
        ?>
    </table>
    

</body>
</html>