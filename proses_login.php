<?php
session_start();
include "koneksi.php";

$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

if($role == "siswa"){

    $nisn = $_POST['nisn'];

    $query = mysqli_query($koneksi,"SELECT * FROM tb_user 
    WHERE email='$email' 
    AND password='$password'
    AND nisn='$nisn'
    AND role='siswa'");

}

elseif($role == "guru"){

    $nuptk = $_POST['nuptk'];

    $query = mysqli_query($koneksi,"SELECT * FROM tb_user 
    WHERE email='$email' 
    AND password='$password'
    AND nuptk='$nuptk'
    AND role='guru'");

}

elseif($role == "penjual"){

    $no_hp = $_POST['no_hp'];

    $query = mysqli_query($koneksi,"SELECT * FROM tb_user 
    WHERE email='$email' 
    AND password='$password'
    AND no_hp='$no_hp'
    AND role='penjual'");

}

$data = mysqli_fetch_assoc($query);

if($data){

    $_SESSION['nama'] = $data['nama_lengkap'];
    $_SESSION['role'] = $data['role'];

    if($data['role'] == "siswa"){
        header("Location: siswa/dashboard.php");
    }

    elseif($data['role'] == "guru"){
        header("Location: guru/dashboard.php");
    }

    elseif($data['role'] == "penjual"){
        header("Location: penjual/dashboard.php");
    }

    exit;

}else{
    header("Location: login.php?pesan=gagal");
    exit;
}
?>