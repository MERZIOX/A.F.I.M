<?php
session_start();
$sesion = $_SESSION['username'];
$rol = $_SESSION['rol'];
if (!isset($sesion)) {
    header("location: login.php");
} else {
    if ($rol == 1) {
    } else {
        header("location: logout.php"); 
    }
}
?>