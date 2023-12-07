<?php
require "databaseuser.php";
$menu = query("SELECT * FROM menu");

if (isset($_POST["makanan"])) {
	$menu = cari("makanan");
} else if (isset($_POST["minuman"])) {
	$menu = cari("minuman");
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
	<title>Menu Makanan & Minuman</title>
	<link rel="stylesheet" type="text/css" href="userstyle.css">
</head>

<body>

	<div class="bingkai">

		<div class="header">
			<h1>MAKANAN & MINUMAN</h1>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="#">NasGor Sedap</a>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="../halamanhome.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="../koneksi.php">Menu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../contact.php">Contact Us</a>
						</li>
					</ul>
					<a class="btn btn-outline-danger" href="../logout.php">Log Out</a>
				</div>
			</div>
		</nav>

		<div class="badan">

			<!-- side bar -->
			<div class="sidebar bg-white">
				<div class="sejarah">
					<form action="" method="post">
						<div class="d-grid gap-2 mt-3">
							<button class="btn btn-dark" type="submit" name="makanan">Daftar Makanan</button>
							<button class="btn btn-dark" type="submit" name="minuman">Daftar Minuman</button>
						</div>
					</form>
				</div>
			</div>

			<div class="content">
				<!-- Card -->
				<?php foreach ($menu as $row) : ?>
					<div class="card mb-3" style="max-width: 100%;">
						<div class="row g-0">
							<div class="col-md-4">
								<img src="../assets/menu/<?= $row["gambar"]; ?>" width="200" height="100%" alt="...">
							</div>
							<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title"><?= $row["nama"]; ?></h5>
									<p class="card-text">Rp. <?= number_format($row["harga"]); ?></p>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
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