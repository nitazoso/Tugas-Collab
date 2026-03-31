<?php

$conn = mysqli_connect("localhost", "root", "", "e_kantin");

if (isset($_GET['search'])) {

    $search = $_GET['search'];

    $query = "SELECT * FROM tb_menu 
              WHERE id_kantin = 1  
              AND nama_menu LIKE '%$search%'";

    $result = mysqli_query($conn, $query);

    while ($data = mysqli_fetch_assoc($result)) {
?>

        <div class="menu-card">
     <img src="gambar_menu/<?php echo $data['foto_menu']; ?>
    " alt="<?php echo $data['nama_menu']; ?> "style="width:200px;">
<p>Rp <?php echo $data['harga']; ?></p>

</div>

<?php
    }
}
?>