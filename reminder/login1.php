<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet"> 
    <title>Login</title>
</head>
<body>

<div class="container-login">
  <div class="brand-logo"></div>                      
  <div class="brand-title">REMINDER</div>
  <form action="proses_login_designer.php" method="POST">
    <div class="inputs">
      <label>EMAIL</label>
      <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
      <label>PASSWORD</label>
      <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
      <button type="submit" value="Login">LOGIN</button>
    </div>
  </form>
  <a href="register.php">Belum Punya Akun?</a>
</div>
</body>
</html>