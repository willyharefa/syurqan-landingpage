<?php 

include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$cek = $koneksi->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
$data = mysqli_num_rows($cek);
if($data > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location: ../pages/admin/dashboard.php");
} 
else {
    header("location: ../pages/login.php?pesan=gagal");
}

?>