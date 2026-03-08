<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM tb_kantin");

while($data = mysqli_fetch_assoc($query)){
?>

<div class="kantin">
    <h3><?php echo $data['nama_kantin']; ?></h3>

    <a href="menu_kantin.php?id_kantin=<?php echo $data['id_kantin']; ?>">
        Lihat Menu
    </a>
</div>

<?php } ?>