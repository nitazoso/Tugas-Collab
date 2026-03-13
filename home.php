<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KantinKita</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <div class="logo">
        <img src="icon/logo.svg" alt="KantinKita">
    </div>

    <div class="top-nav">
        <nav class="menu">
            <a href="#">
                <img src="icon/home2.svg" alt=" home"> <span>Beranda</span>
            </a>
            <a href="#">
                <img src="icon/pesanan1.svg" alt=""><span>Pesanan</span>
            </a>
            <a href="#">
                <img src="icon/user1.svg" alt=""><span>Profil</span>
            </a>
        </nav>
    </div>

    <div class="container">
        <h1 class="teks">
            Cari Menu <b>Yang Kamu Inginkan!</b>
        </h1>

        <input type="text" placeholder="Mencari" class="search">

        <div class="kategori">
            <button class="kat-btn">
                <img src="icon/makanan.svg"> Makanan
            </button>
            <button class="kat-btn">
                <img src="icon/minuman.svg"> Minuman
            </button>
            <button class="kat-btn">
                <img src="icon/snack.svg"> Camilan
            </button>
        </div>
    </div>

    <div class="slider">
        <div class="slides">
            <div class="slide">
                <img src="kantin1.jpg">
                <button class="kantin-btn">Kantin 1</button>
            </div>
            <div class="slide">
                <img src="kantin2.jpg">
                <button class="kantin-btn">Kantin 2</button>
            </div>
            <div class="slide">
                <img src="kantin3.jpg">
                <button class="kantin-btn">Kantin 3</button>
            </div>
            <div class="slide">
                <img src="kantin4.jpg">
                <button class="kantin-btn">Kantin 4</button>
            </div>
            <div class="slide">
                <img src="kantin5.jpg">
                <button class="kantin-btn">Kantin 5</button>
            </div>
        </div> <div class="dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>
    <div class= "menu-menu">
        <div class ="menu-card"></div>
            <img src="menu1.jpg">
            <h3> mie ayam</h3>
            <p>Rating: 5.5 ★★★</p>
            <span> Rp 10k</span>
        </div>
        <div class ="menu-card"></div>
            <img src="menu2.jpg">
            <h3> batagor </h3>
            <p>Rating: 5.5 ★★★</p>
            <span> Rp 10k</span>
        </div>
        <div class ="menu-card"></div>
            <img src="menu3.jpg">
            <h3> batagor </h3>
            <p>Rating: 5.5 ★★★</p>
            <span> Rp 10k</span>
        </div>

</div>
    </body>
</html>