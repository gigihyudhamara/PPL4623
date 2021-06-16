<?php
    include ("../config.php");
    session_start();
    $id_member = $_SESSION['id_member'];
    $id_prapendaftaran_game = $_GET['id_prapendaftaran_game'];

    
    

    //echo $id_relawan. "-".$acara;
    $sql = "DELETE FROM prapendaftarangame WHERE id_prapendaftaran_game='$id_prapendaftaran_game'";
    $query = mysqli_query($mysqli, $sql) or die ("Tidak ada database");

    if($query){
        echo "<script>alert('Hapus prapendafataran sukses!')</script>";
        echo "<script>top.location='gamelist.php?id_member=".$id_member."'</script>"; 
    }else{
        echo "<script>alert('Hapus prapendaftaran gagal!')</script>";
        echo "<script>top.location='gamelist.php?id_member=".$id_member."'</script>"; 
    }
?>