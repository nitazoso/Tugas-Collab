<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
<style>
    .logo-mobile { display: flex; align-items: center; width: auto;
    height: 40px; justify-content: flex-end; padding: 0 20px 20px 0 }
</style>
</head>
<body>

    <div class="logo-mobile">
        <img src="icon/logo.svg" alt="KantinKita">
    </div>
    <div>
        <h1> <p>Kantin Satu</p> Pak Agus</h1>
    </div>
    <!-- ---------------SEARCH------------- -->
    <div class="mencari">

        <form action="search_menu.php" method="GET">

         <input type="text" name="search" placeholder="Cari menu..." class="search" >

            <button type="submit">

             <img src="icon/cari.svg" alt="">
            </button>

        </form>
  
    </div>
     <!-- -------------------- /SEARCH--------------------- -->
</body>
</html>