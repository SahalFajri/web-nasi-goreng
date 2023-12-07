<?php  
require 'databaseadmin.php';

// ambil data dari URL
$id = $_GET["id"];

// query data siswa berdasarkan id
$swa = query("SELECT * FROM menu WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan apa belum
if (isset($_POST["submit"])) {

	// cek apakah data berhasil diubah atau tidak
	if(ubah($_POST) > 0){
		echo "
			<script>
				alert('data berhasil diubah');
				document.location.href = 'halamanadmin.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('data gagal diubah');
				document.location.href = 'halamanadmin.php';
			</script>
		";
	}

};
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Ubah Makanan/Minuman</title>
	<link rel="stylesheet" type="text/css" href="styleubah.css">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="frm">
			<h1>Ubah Makanan / Minuman</h1>
			<input type="hidden" name="id" value="<?= $swa['id']?>">
			<div class="mb-3">
			  <label for="nama" class="form-label">Nama :</label>
			  <input type="text" class="form-control" name="nama" id="nama" value="<?= $swa['nama'] ?>" required="required">
			</div>
			<div class="mb-3">
			  <label for="harga" class="form-label">Harga :</label>
			  <input type="harga" class="form-control" name="harga" id="harga" value="<?= $swa['harga'] ?>" required="required">
			</div>
			<div class="mb-3">
			  <label for="gambar" class="form-label">Gambar :</label>
			  <input type="gambar" class="form-control" name="gambar" id="gambar" value="<?= $swa['gambar'] ?>" required="required">
			</div>
			<button type="submit" name="submit" class="btn btn-danger">Ubah Data!</button>
			<br><br>
			<a class="btn btn-dark" href="halamanadmin.php">Kembali Halaman Admin</a>	
		</div>
	</form>
	<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>
</html>