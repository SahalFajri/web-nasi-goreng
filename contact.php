<?php  
require 'koneksilogin.php';
// cek apakah tombol submit sudah ditekan apa belum

// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		echo '<script language="javascript">alert("Anda harus Login!"); document.location="logout.php";</script>';
	}

if (isset($_POST["submit"])) {

	// cek apakah pesan berhasil dikirim atau tidak
	if(kontak($_POST) > 0){
		echo "
			<script>
				alert('pesan berhasil dikirim');
				document.location.href = 'halamanhome.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('pesan gagal dikirim');
				document.location.href = 'halamanhome.php';
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
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="contactstyle.css">
</head>
<body>
	<form action="" method="post">
		<div class="frm">
			<h1>Contact Us</h1>
			<div class="mb-3">
			  <label for="nama" class="form-label">Nama :</label>
			  <input type="text" class="form-control" name="nama" id="nama" required="required" placeholder="Nama">
			</div>
			<div class="mb-3">
			  <label for="email" class="form-label">Email address :</label>
			  <input type="email" class="form-control" name="email" id="email" required="required" placeholder="nama@gmail.com">
			</div>
			<div class="mb-3">
			  <label for="pesan" class="form-label">Pesan :</label>
			  <textarea class="form-control" name="pesan" id="pesan" required="required" rows="3"></textarea>
			</div>
			<button type="submit" name="submit" class="btn btn-danger">Kirim Pesan!</button>
			<br><br>
			<a class="btn btn-dark" href="halamanhome.php">Kembali Ke Halaman Home</a>
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