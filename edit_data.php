<?php
    include "koneksi.php";
    $id = $_GET['npm'];
    $ambilData = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE npm='$id'");
    $data=mysqli_fetch_array($ambilData);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-6">
    <div class="card-header bg-primary text-white">
        Input Data Mahasiswa
    </div>   

    <div class="card-body">
    <form action="" method="POST" class="form-item">
    <form>
    <div class="form-group">
    <label for="NPM"> NPM MAHASISWA </label>
    <input type="text" name="npm" value="<?php echo $data['npm']?>"class="form-control col-md-9" placeholder="Masukkan NPM">
    </div>

    <div class="form-group">
    <label for="NAMA"> NAMA MAHASISWA </label>
    <input type="text" name="nama"value="<?php echo $data['nama']?>" class="form-control col-md-9" placeholder="Masukkan NAMA">
    </div>

    <div class="form-group">
    <label for="JURUSAN"> JURUSAN MAHASISWA </label>
    <input type="text" name="jurusan"value="<?php echo $data['jurusan']?>" class="form-control col-md-9" placeholder="Masukkan JURUSAN">
    </div>

    <div class="form-group">
    <label for="PROGRAM_STUDI"> PRODI MAHASISWA </label>
    <input type="text" name="program_studi"value="<?php echo $data['program_studi']?>" class="form-control col-md-9" placeholder="Masukkan PROGRAM STUDI">
    </div>

    <div class="form-group">
    <label for="JENIS_KELAMIN"> JENIS KELAMIN MAHASISWA </label>
    <input type="text" name="jenis_kelamin"value="<?php echo $data['jenis_kelamin']?>" class="form-control col-md-9" placeholder="Masukkan JENIS KELAMIN">
    </div>

    <div class="form-group">
    <label for="EMAIL"> EMAIL MAHASISWA </label>
    <input type="text" name="email"value="<?php echo $data['email']?>" class="form-control col-md-9" placeholder="Masukkan EMAIL">
    </div>

    <div class="form-group">
    <label for="HANDPHONE"> HANDPHONE MAHASISWA </label>
    <input type="text" name="handphone"value="<?php echo $data['handphone']?>" class="form-control col-md-9" placeholder="Masukkan HANDPHONE">
    </div>

    <div class="form-group">
    <label for="TEMPAT_LAHIR"> TEMPAT LAHIR MAHASISWA </label>
    <input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir']?>" class="form-control col-md-9" placeholder="Masukkan TEMPAT LAHIR">
    </div>

    <div class="form-group">
    <label for="TANGGAL_LAHIR"> TANGGAL LAHIR MAHASISWA </label>
    <input type="date" name="tanggal_lahir"value="<?php echo $data['tanggal_lahir']?>" class="form-control col-md-9" placeholder="Masukkan TANGGAL LAHIR">
    </div>

    <div class="form-group">
    <label for="AGAMA"> AGAMA MAHASISWA </label>
    <input type="text" name="agama"value="<?php echo $data['agama']?>" class="form-control col-md-9" placeholder="Masukkan AGAMA">
    </div>


    <br>
    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
    <button type="reset" class="btn btn-danger">BATAL</button>
    </form>
</body>
</html>

<?php
    include "koneksi.php";
    if(isset($_POST['simpan']))
    {
        $NPM            = $_POST['npm'];
        $NAMA           = $_POST['nama'];
	$JURUSAN	= $_POST['jurusan'];
	$PROGRAM_STUDI  = $_POST['program_studi'];
	$JENIS_KELAMIN  = $_POST['jenis_kelamin'];
	$EMAIL	        = $_POST['email'];
	$HANDPHONE      = $_POST['handphone'];
        $TEMPAT_LAHIR   = $_POST['tempat_lahir'];
        $TANGGAL_LAHIR  = $_POST['tanggal_lahir'];
        $AGAMA		= $_POST['agama'];
          
        mysqli_query($koneksi, "UPDATE mahasiswa 
            SET npm='$NPM', nama='$NAMA', jurusan='$JURUSAN', program_studi='$PROGRAM_STUDI', jenis_kelamin='$JENIS_KELAMIN', email='$EMAIL', handphone='$HANDPHONE', tempat_lahir='$TEMPAT_LAHIR', tanggal_lahir='$TANGGAL_LAHIR', agama='$AGAMA' WHERE npm='$id'") or die(mysqli_error($koneksi));
            
        echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang DiUpdate....</h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=http://universitasku.com/data_mahasiswa.php'>";
    }

?>
