<?php
    include ("../config.php");
    session_start();
    $id_member = $_SESSION['id_member'];
    $id_game = $_POST['gamelist'];
    

    //echo $id_relawan. "-".$acara;
    $sql = "INSERT INTO prapendaftarangame (id_member, id_game) VALUE ('$id_member','$id_game')";
    $query = mysqli_query($mysqli, $sql) or die ("Tidak ada database");

    if($query){
        echo "<script>alert('Prapendaftar game sukses!')</script>";
        echo "<script>top.location='gamelist.php?id_member=".$id_member."'</script>"; 
    }else{
        echo "<script>alert('Prapendaftar game gagal!')</script>";
        echo "<script>top.location='gamelist.php?id_member=".$id_member."'</script>"; 
    }
?>