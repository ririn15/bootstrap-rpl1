<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
}
?>
<html>
<head>
  <title>Halaman Sebelum Login</title>
</head>
<body>
  <h1>Silahkan login terlebih dahulu...</h1>
  
  <div style="color: red;margin-bottom: 15px;">
    <?php
    if(isset($_SESSION["simpan"])){ // Jika ada
      echo $_SESSION["login"]; // Tampilkan pesannya
    }
    ?>
  </div>
  
  <form method="post" action="form2.php">
    <label>Username</label><br>
    <input type="text" name="un" placeholder="..."><br><br>
    
    <label>Password</label><br>
    <input type="password" name="password" placeholder="..."><br><br>
    
    <button type="submit">Login</button>
  </form>
</body>
</htm