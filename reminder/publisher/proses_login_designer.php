<?php
    include ("config.php");

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    echo $username. "-".$email. "-".$password;
    $sql = "SELECT id_user_desainer, username, foto FROM user_desainer WHERE email='$email' AND password='$password'";
    $query = mysqli_query($mysqli, $sql) or die ("Tidak ada database");
    $data = mysqli_fetch_array($query);
    $row = mysqli_num_rows($query);

    session_start();
    $_SESSION['id_user_desainer'] = $data['id_user_desainer'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['foto'] = $data['foto'];

    if($row==1){
        echo "<script>alert('Login akun sukses!')</script>";
        echo "<script>top.location='member/'</script>"; 
    }else{
        echo "<script>alert('Login akun gagal!')</script>";
        echo "<script>top.location='index.php'</script>"; 
    }
?>