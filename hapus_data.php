<?php
    include "koneksi.php";
    $id = $_GET['npm'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE npm='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://universitasku.com/data_mahasiswa.php'>";
?>