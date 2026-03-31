<?php
session_start();
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KantinKita</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body{
             font-family: 'Poppins', sans-serif;
        }
        .teks {
            font-family: 'Poppins', sans-serif;

            /* font-family: "Poppins";
            font-size: 32px;
            font-family: Poppins; */
            font-weight: 200;
            font-style: Light;
            font-size: 32px;
            padding: 20px;
            line-height: 29px;
            letter-spacing: -2%;

        }

        .teks b {
            font-weight: 550;
            /* bold */
        }



        /* CSS FOTO KANTIN  */
        .parent {
            font-family: 'Poppins', sans-serif;
            display: grid;
            grid-template-columns: auto auto auto auto auto;
           
            /* justify-content: center;
    /* horizontal 
    align-items: center; */
            /* flex-wrap: wrap; */

        }

        .div1 {
            /* grid-row: span 1 / span 1; */
            width: 100%;
            color: black;
            justify-content: center;
            text-align: center;
        }

        /* .div1 a {
            display: block;
            text-align: center;
            text-decoration: none;
            color: white;
            background-color: #B09B83;
            padding: 10px 25px 10px 25px;
            font-size: 20px;
            border-radius: 50px;
            place-items: center;
            justify-self: center;

        } */

        .div1 img {
            
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 20px;
            display: block;
           
        }

        .nama {
            font-size: 14px;
            font-weight: 600;
            margin-top: 6px;
        }

        .rating {
            font-size: 12px;
            color: #777;
        }

        .harga {
            color: #ff7a00;
            font-weight: 700;
            font-size: 14px;
        }

        .btn {
            background: #ff7a00;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 8px;
            margin-top: 5px;
            cursor: pointer;
        }

        .card-menu {
            width: 90%;
            background-color: white;
            border-radius: 10px;
            align-items: center;
            display: flex;
            flex-direction: column;
            padding: 10px;
            margin: 8px;
            box-shadow:0 3px 8px rgba(0,0,0,0.1);
        }

        .text {
            font-family: 'Poppins', sans-serif;
        }

        /* CONTAINER UTAMA SLIDER */
        .slider {
            background-color: white;
            border-radius: 20px;
            /* Lengkungan penuh sesuai target Webtoon */
            padding: 5px 0 5px;
            /* Hanya padding atas & bawah. Padding kiri/kanan = 0 */
            margin-top: 30px;
            width: 100%;
            overflow: hidden;
            /* SANGAT PENTING: Memotong konten yang keluar dari border putih */
            position: relative;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .slides {
            display: flex;
            gap: 22px;
            overflow-x: auto;
            padding: 10px 20px;
            scroll-snap-type: x mandatory;
            scroll-padding: 20px;
        }

        .slide {
            min-width: 49%;
            height: 180px;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
            scroll-snap-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Biar gambar tidak gepeng */
        }

        .kantin-btn {
            position: absolute;
            top: 75%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* Pas di tengah */
            background: rgba(230, 126, 34, 0.9);
            /* Oranye agak transparan */
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 12px;
            font-weight: 700;
            cursor: pointer;
            white-space: nowrap;
        }

        /* Sembunyikan scrollbar untuk Chrome, Safari dan Opera */
        .slides::-webkit-scrollbar {
            display: none;
        }

        /* Sembunyikan scrollbar untuk IE, Edge dan Firefox */
        .slides {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        /* DOTS (Pastikan di HTML ini berada di LUAR .slides) */
        .dots {
            display: flex;
            gap: 8px;
            position: absolute;
            transform: translateX(-50%);
            bottom: 20px;
            left: 50%;
        }

        .dot {
            height: 8px;
            width: 8px;
            background-color: #bbb;
            /* Warna titik yang tidak aktif */
            border-radius: 50%;
            display: inline-block;
            transition: all 0.3s ease;
        }

        /* Warna untuk titik yang sedang aktif */
        .dotactive {
            background-color: #f57c00;
            width: 20px;
            /* Membuat titik aktif jadi lebih panjang/lonjong */
            border-radius: 5px;
        }

        /* .menu-menu {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        } */
        /* 
        .menu-card {
            width: 420px;
            background-color: white;
            color: black;
            border-radius: 20px;
            padding: 30px;
            margin: 40px auto;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        } */



        .kategori {
            padding: 10px;
            display: flex;

        }

        .kat-btn {
            flex: 1;
            display: flex;
            border-radius: 10px;
            border: none;
            margin: 5px;
            align-items: center;
            justify-content: center;
            background-color: #fff;
        }

        .kat-btn img {
            width: 45px;
            height: auto;
        }

        @media (max-width: 880px) {

            .parent {
                display: grid;
                grid-template-columns: repeat(2,1fr);
                padding: 10px;
                scroll-behavior: smooth;
            }
            

            div img {
                /* margin: auto; */
            }

            .div1 {

                width:100%;
                max-width: 300px;
     
            }


            .slide {
                min-width: 100%;
                height: 180px;
                border-radius: 20px;
                position: relative;
                overflow: hidden;
                scroll-snap-align: center;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }
        }
    </style>
</head>

<body>


    <!-- LOGO -->
    <div class="logo-mobile">
        <img src="../icon/logo.svg" alt="KantinKita">
    </div>

    <div class="logo-desktop">
        <img src="../icon/logo1.svg" alt="KantinKita">
    </div>
    <!-- --------/LOGO------------ -->
    <div class="top-nav">
        <nav class="menu">
            <a href="#">
                <img src="../icon/home2.svg" alt=" home"> <span>Beranda</span>
            </a>
            <a href="#">
                <img src="../icon/pesanan1.svg" alt=""><span>Pesanan</span>
            </a>
            <a href="#">
                <img src="../icon/user1.svg" alt=""><span>Profil</span>
            </a>
        </nav>

    </div>


    <div class="container">
        <h1 class="teks">
            Cari Menu <b>Yang Kamu Inginkan!</b>
        </h1>
        <!-- ----------------SEARCH---------------- -->

        <div class="mencari">

            <form action="search_menu.php" method="GET">

                <input type="text" name="search" placeholder="Cari menu..." class="search">

                <button type="submit">
                    <img src="../icon/cari.svg" alt="">
                </button>

            </form>

        </div>
        <!-- -------------------- /SEARCH--------------------- -->


        <div class="kategori">
            <button class="kat-btn">
                <img src="../icon/makanan.svg"> <span> Makanan</span>
            </button>
            <button class="kat-btn">
                <img src="../icon/minuman.svg"> <span> Minuman</span>
            </button>
            <button class="kat-btn">
                <img src="../icon/snack.svg"> <span>Camilan</span>
            </button>
        </div>

        <!-- -----------SLIDE--------------  -->
        <div class="slider">
            <div class="slides">
                 <?php
    $koneksi= mysqli_connect("localhost", "root", "", "e_kantin");
    $result_kantin = mysqli_query($koneksi, "SELECT * FROM tb_kantin");
    $no=1;
    while ($row = mysqli_fetch_assoc($result_kantin)){
    ?>
                <div class="slide">
                    <img src="../foto_kantin/<?php echo $row['foto_kantin'];?>">
                    <button class="kantin-btn">Kantin <?php echo $no++;?></button>
                </div>
                <?php
    }
    ?>
            </div>
            <div class="dots">
                <?php
                $jumlah_data=mysqli_num_rows($result_kantin);
                for ($i=0;$i<$jumlah_data;$i++){
                    $status_active=($i==0)?"active":"";
                    ?>
                    <span class="dot<?php echo $status_active;?>"></span>
                    <?php
                }
                ?>
                
            </div>
        </div>
        <!-- -----------/  SLIDE--------------  -->
    </div>

    <?php
 $koneksi = mysqli_connect("localhost", "root", "", "e_kantin");
    $result_menu = mysqli_query($koneksi, "SELECT * FROM tb_menu");
    ?>
    <div class="parent">

        <?php while ($row = mysqli_fetch_assoc($result_menu)): ?>

            <div class="card-menu">
                <div class="div1">
                    <img src="../gambar_menu/<?php echo $row['foto_menu']; ?>">

                    <div class="nama"><?php echo $row['nama_menu']; ?></div>

                    <div class="rating">Rating 5,5 ★★★</div>

                    <div class="harga">
                        Rp <?php echo number_format($row['harga'] / 1000); ?>K
                    </div>

                    <button class="btn">Pesan</button>
                </div>

            </div>
        <?php endwhile; ?>
    </div>


    <!-- <div class="menu-card">
          <img src="gambar_menu/mieayam.jpg">
        <h3> batagor </h3>
        <p>Rating: 5.5 ★★★</p>
        <span> Rp 10k</span>
        </div>
        <div class="menu-card">
        <img src="menu3.jpg">
        <h3> batagor </h3>
        <p>Rating: 5.5 ★★★</p>
        <span> Rp 10k</span>
    </div> -->

</body>

</html>