<?php  
require 'databaseadmin.php';
// cek apakah tombol submit sudah ditekan apa belum

if (isset($_POST["submit"])) {

	// cek apakah data berhasil ditambahkan atau tidak
	if(tambahminum($_POST) > 0){
		echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'halamanadmin.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('data gagal ditambahkan');
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
	<title>Tambah Minuman</title>
	<link rel="stylesheet" type="text/css" href="tambahstyle.css">
</head>
<body>
	<form action="" method="post">
		<div class="frm">
			<h1>Tambah Minuman</h1>
			<div class="mb-3">
			  <label for="nama" class="form-label">Nama Minuman:</label>
			  <input type="text" class="form-control" name="nama" id="nama" required="required">
			</div>
			<div class="mb-3">
			  <label for="harga" class="form-label">Harga :</label>
			  <input type="harga" class="form-control" name="harga" id="harga" required="required">
			</div>
			<div class="mb-3">
			  <label for="gambar" class="form-label">Gambar :</label>
			  <input type="gambar" class="form-control" name="gambar" id="gambar" required="required">
			</div>
			<button type="submit" name="submit" class="btn btn-danger">Tambah Minuman</button>
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