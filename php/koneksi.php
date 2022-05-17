<?php 
$koneksi = mysqli_connect("127.0.0.1", "root", "", "syurqan");
    if(!$koneksi) {
        echo "Database belum terkoneksi";
    }
?>