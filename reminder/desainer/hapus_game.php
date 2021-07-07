<?php
    include ("../config.php");
    session_start();
    $id_user_desainer = $_SESSION['id_user_desainer'];
    $id_info_project = $_GET['id_info_project'];

    
    

    //echo $id_relawan. "-".$acara;
    $sql = "DELETE FROM `info_project` WHERE `info_project`.`id_info_project` = '$id_info_project'";
    $query = mysqli_query($mysqli, $sql) or die ("Tidak ada database");

    if($query){
        echo "<script>alert('Hapus prapendafataran sukses!')</script>";
        echo "<script>top.location='gamelist.php?id_user_desainer=".$id_user_desainer."'</script>"; 
    }else{
        echo "<script>alert('Hapus prapendaftaran gagal!')</script>";
        echo "<script>top.location='gamelist.php?id_user_desainer=".$id_user_desainer."'</script>"; 
    }
?>