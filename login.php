<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login KantinKita</title>
<link rel="stylesheet" href="style.css">

<style>
.form section{
  background-color: white;
  border-radius: 20px;
}
</style>

</head>

<body>

<div class="logo">
<img src="logo.svg" alt="KantinKita">
</div>

<h1 class="teks"><b>Pilih Status Anda</b> Terlebih dahulu</h1>

<a href="login.php?role=siswa">Siswa</a>
<a href="login.php?role=guru">Guru</a>
<a href="login.php?role=penjual">Penjual</a>

<?php
$role = isset($_GET['role']) ? $_GET['role'] : "";
?>

<?php if($role == "siswa"){ ?>

<h2>Login Siswa</h2>

<form method="POST" action="proses_login.php">

<input type="hidden" name="role" value="siswa">

<input type="email" name="email" placeholder="Email" required>
<br><br>

<input type="password" name="password" placeholder="Password" required>
<br><br>

<input type="text" name="nisn" placeholder="NISN" required>
<br><br>

<button type="submit">Login</button>

</form>

<?php } ?>


<?php if($role == "guru"){ ?>

<h2>Login Guru</h2>

<form method="POST" action="proses_login.php">

<input type="hidden" name="role" value="guru">

<input type="email" name="email" placeholder="Email" required>
<br><br>

<input type="password" name="password" placeholder="Password" required>
<br><br>

<input type="text" name="nuptk" placeholder="NUPTK" required>
<br><br>

<button type="submit">Login</button>

</form>

<?php } ?>


<?php if($role == "penjual"){ ?>

<h2>Login Penjual</h2>

<form method="POST" action="proses_login.php">

<input type="hidden" name="role" value="penjual">

<input type="email" name="email" placeholder="Email" required>
<br><br>

<input type="password" name="password" placeholder="Password" required>
<br><br>

<input type="text" name="no_hp" placeholder="No HP" required>
<br><br>

<button type="submit">Login</button>

</form>

<?php } ?>

</body>
</html>