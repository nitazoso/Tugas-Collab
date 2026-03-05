<?php
session_start();

if($_SESSION['role'] != "penjual"){
    header("Location: ../login.php");
}
?>