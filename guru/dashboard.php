<?php
session_start();

if($_SESSION['role'] != "guru"){
    header("Location: ../login.php");
}
?>