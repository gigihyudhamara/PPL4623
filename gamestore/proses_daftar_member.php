<?php
    include ("config.php");

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    //echo $username. "-".$email. "-".$password;
    $sql = "INSERT INTO akunmember (username, email, password) VALUE ('$username','$email','$password')";
    $query = mysqli_query($mysqli, $sql) or die ("Tidak ada database");

    if($query){
        echo "<script>alert('Daftar akun sukses!')</script>";
        echo "<script>top.location='index.php'</script>"; 
    }else{
        echo "<script>alert('Daftar akun gagal!')</script>";
        echo "<script>top.location='index.php'</script>"; 
    }
?>