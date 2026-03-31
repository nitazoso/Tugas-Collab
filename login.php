<?php
$role = isset($_GET['role']) ? $_GET['role'] : "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login KantinKita</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            /* display:flex; */
            font-family: 'Poppins', sans-serif;
            align-items: center;
        }

        .logo img {
            width: 28vh;
            height: auto;

        }

        .logo {
            margin: 40px 0 65px 0;

        }

        .role {
            width: 60%;
            margin: 10px auto;
            padding: 12px;
            border-radius: 20px;
            border: none;
            justify-content: center;
            display: block;

        }

        .role a {
            background-color: white;
            padding: 8px 18px 8px 18px;
            border-radius: 30px;
            margin: 23px;
            text-decoration: none;
            color: black;
            font-size: 21px;
            display: block;
            text-align: center;
        }

        .card {
            width: 420px;
            background-color: white;
            color: black;
            border-radius: 20px;
            padding: 30px;
            margin: 40px auto;
            justify-content: center;
        }

        .card h1 {
            font-size: 36px;
        }

        .card .input-box {
            width: 100%;
            height: 50px;
            margin: 30px 0;
        }

        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            padding: 20px 45px 20px 20px;
        }
    </style>

</head>

<body>
    <!-- LOGO -->
    <div class="logo">
        <img src="icon/logo.svg" alt="KantinKita">
    </div>

    <!-- --------/LOGO------------ -->
<?php if ($role == "") {;?>
    <h1 class="teks"><b>Pilih Status Anda</b> Terlebih dahulu</h1>
    <div class="role">
        <a href="login.php?role=siswa">Siswa</a>
        <a href="login.php?role=guru">Guru</a>
        <a href="login.php?role=penjual">Penjual</a>
    </div>

    <?php } ?>

    <?php if ($role == "siswa") { ?>

        <div class="card">
            <h2>Login Siswa</h2>

            <form method="POST" action="proses_login.php">
                <input type="hidden" name="role" value="siswa">


                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                    <hr>
                    <br><br>
                </div>

                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <hr>
                    <br><br>
                </div>

                <div class="input-box">
                    <input type="text" name="nisn" placeholder="NISN" required>
                    <hr>
                    <br><br>
                </div>

                <button type="submit">Login</button>

            </form>
        </div>


    <?php } ?>


    <?php if ($role == "guru") { ?>
 <div class="card">
        <h2>Login Guru</h2>
       
            <form method="POST" action="proses_login.php">
                <input type="hidden" name="role" value="guru">
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                    <br><br>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <br><br>
                </div>
                <div class="input-box">
                    <input type="text" name="nuptk" placeholder="NUPTK" required>
                    <br><br>
                </div>
                <button type="submit">Login</button>

            </form>
        </div>
    <?php } ?>


    <?php if ($role == "penjual") { ?>
   <div class="card">
        <h2>Login Penjual</h2>
     
            <form method="POST" action="proses_login.php">

                <input type="hidden" name="role" value="penjual">
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                    <br><br>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <br><br>
                </div>

                <div class="input-box">
                    <input type="text" name="no_hp" placeholder="No HP" required>
                    <br><br>
                </div>
                <button type="submit">Login</button>

            </form>
        </div>
    <?php } ?>

</body>

</html>