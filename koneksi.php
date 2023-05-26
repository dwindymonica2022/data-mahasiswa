<?php
    $koneksi = mysqli_connect("192.168.156.76", "dwindy", "12345678", "informatika");

    if(!$koneksi)
    {
        echo "Koneksi ke MySQL Gagal... ";
    }
?>