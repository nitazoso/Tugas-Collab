<?php
session_start();

if($_SESSION['role'] != "siswa"){
    header("Location: ../login.php");
}
?>