<?php
    include ("../config.php");
    session_start();
    $id_user_desainer = $_SESSION['id_user_desainer'];
    $id_detail_project = $_POST['detail_project'];
    

    //echo $id_relawan. "-".$acara;
    $sql = "INSERT INTO `info_project` (`id_user_desainer`, `id_detail_project`) VALUES ('$id_user_desainer', '$id_detail_project')";
    
    $query = mysqli_query($mysqli, $sql) or die ("Tidak ada database");

    if($query){
        echo "<script>alert('Prapendaftar game sukses!')</script>";
        echo "<script>top.location='gamelist.php?id_user_desainer=".$id_user_desainer."'</script>"; 
    }else{
        echo "<script>alert('Prapendaftar game gagal!')</script>";
        echo "<script>top.location='gamelist.php?id_desainer=".$id_user_desainer."'</script>"; 
    }
?>