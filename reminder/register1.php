<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet"> 
    <title>Register</title>
</head>
<body>

<div class="container-register">
  <div class="brand-logo"></div>
  <div class="brand-title">REMINDER</div>
  <form action="proses_daftar_designer.php" method="POST">
    <div class="inputs">
      <label>Realname</label>
      <input name="nama_lengkap" class="form-control" id="nama_lengkap" type="text" placeholder="Realname *" required="required" data-validation-required-message="Please enter your Realname." >
      <label>Username</label>
      <input name="username" class="form-control" id="name" type="text" placeholder="Username *" required="required" data-validation-required-message="Please enter your name.">
      <label>EMAIL</label>
      <input name="email" class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Masukkan email.">
      <label>PASSWORD</label>
      <input name="password" class="form-control" id="phone" type="password" placeholder="Password *" required="required" data-validation-required-message="Masukkan password.">
      <label>Designer or Publisher</label>
      <select id="Designer or Publisher">
      <option value="Designer">Designer </option>
      <option value="Publisher">Publisher </option>
      </select>
      <button type="submit" value="Daftar">Register</button>
    </div>
  </form>

  <a href="login.php">Sudah Punya Akun?</a>
</div>
</body>
</html>