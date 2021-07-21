<?php
session_start();
unset($_SESSION['Admin_LOGIN']);
unset($_SESSION['ADDMIN_LOGIN']);
header('location:login.php'); 
die();
?>