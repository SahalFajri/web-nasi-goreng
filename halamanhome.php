<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="logout.php";</script>';
}
?>

<!DOCTYPE html>
<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Nasi Goreng Sedap</title>
	<link rel="stylesheet" type="text/css" href="stylehome.css">
</head>

<body>

	<div class="bingkai">

		<div class="header">
			<img src="assets/logo.png" width="200">
		</div>

		<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="#">NasGor Sedap</a>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="halamanhome.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="koneksi.php">Menu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact Us</a>
						</li>
					</ul>
					<a class="btn btn-outline-danger" href="logout.php">Log Out</a>
				</div>
			</div>
		</nav>

		<div class="badan">
			<div class="sidebar bg-white">
				<div class="sejarah">
					<h4 class="mt-3 text-center">Artikel Nasi Goreng</h4>
					<hr>
					<p class="mx-1">Di web ini, kami membuat berbagai macam nasi goreng yang sangat pas buat sobat kos-kosan yang bingung mau makan apa atau masak apa. Tersedia video cara memasak nasi goreng di bagian home web kami.</p>
					<hr>
				</div>
			</div>
			<div class="content">
				<center>
					<h1>NasGor Sedap</h1>
					<video controls>
						<source src="assets/masaknasgor.mp4" type="video/mp4">
					</video>
				</center>
				<hr>
				<p>Website NasGor terbuat sejak 5 Juni 2021, awal terbuatnya dikarenakan tugas sekolah yang diwajibkan membuat website tentang seseorang penjual yang ingin mendongkrak penjualannya menggunakan website. sehingga terciptalah website NasGor yang menampilkan berbagai macam nasi goreng.</p>
				<p>Dan di sini kalian juga bisa mengirim kritik atau saran di bagian Contact Us yang berada di bagian navigasi bar. Atau kalian bisa mengklik <a href="contact.php">tulisan ini</a> untuk ke halaman Contact Us.</p>
				<h6>Sekian Dari Website Ini. Terima Kasih Sudah Berkunjung</h6>
			</div>
		</div>
		<div class="clear"></div>
	</div>
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