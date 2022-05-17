<?php 
// Kode ini guna nya ketika tombol log out di klik pada menu dashboard maka akan ngarah kesini
    session_start();
    $_SESSION['username'] = '';
    unset($_SESSION['username']);
    session_unset();
    session_destroy();
    header("Location: ../pages/login.php");

?>