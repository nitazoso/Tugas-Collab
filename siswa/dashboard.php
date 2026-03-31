

<!DOCTYPE html>
<html>
<head>
<title>Dashboard Siswa</title>

<style>

body{
    font-family:Poppins, sans-serif;
    background:#f5f5f5;
    margin:0;
    background-color: #F47B20;
}

.container{
    padding:20px;
}

.menu-container{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:15px;
}

.menu-card{
    background:white;
    border-radius:15px;
    padding:10px;
    box-shadow:0 3px 8px rgba(0,0,0,0.1);
}

.menu-card img{
    width:100%;
    aspect-ratio:1/1;
    object-fit:cover;
    border-radius:12px;
}

.nama{
    font-size:14px;
    font-weight:600;
    margin-top:6px;
}

.rating{
    font-size:12px;
    color:#777;
}

.harga{
    color:#ff7a00;
    font-weight:700;
    font-size:14px;
}

.btn{
    background:#ff7a00;
    color:white;
    border:none;
    padding:6px 12px;
    border-radius:8px;
    margin-top:5px;
    cursor:pointer;
}

</style>
</head>

<body>

<div class="container">

<h2>Pilih Menu Yang Kamu Ingginkan</h2>

<div class="menu-container">

<?php
$query = mysqli_query($koneksi,"SELECT * FROM tb_menu");

while($data = mysqli_fetch_assoc($query)){
?>

<div class="menu-card">

<img src="../gambar_menu/<?php echo $data['foto_menu']; ?>">

<div class="nama"><?php echo $data['nama_menu']; ?></div>

<div class="rating">Rating 5,5 ★★★</div>

<div class="harga">
Rp <?php echo number_format($data['harga']/1000); ?>K
</div>

<button class="btn">Pesan</button>

</div>

<?php } ?>

</div>

</div>

</body>
</html>