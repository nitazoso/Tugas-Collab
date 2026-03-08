<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM tb_menu WHERE id_kantin=1");

while ($data = mysqli_fetch_array($query)) {
?>

<div class="menu-item">
    <img src="gambar_menu/<?php echo $data['foto_menu']; ?>" width="120">
    <p><?php echo $data['nama_menu']; ?></p>
    <p>Rp<?php echo number_format($data['harga'], 0, ',', '.'); ?></p>
</div>

<?php
}
?>