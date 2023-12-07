<?php
require 'koneksilogin.php';
// cek apakah tombol submit sudah ditekan apa belum

if (isset($_POST["submit"])) {

  // cek apakah data berhasil ditambahkan atau tidak
  if (tambahakun($_POST) > 0) {
    echo "
			<script>
				alert('data berhasil ditambahkan');
				alert('silahkan login');
				document.location.href = 'login.php';
			</script>
		";
  } else {
    echo "
			<script>
				alert('data gagal ditambahkan');
				document.location.href = 'login.php';
			</script>
		";
  }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <title>login page</title>
  <link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>

<body>
  <form action="" method="post">
    <div class="container">
      <div class="card w-50 mx-auto" style="margin-top: 150px;">
        <div class="card-body">
          <h5 class="card-title d-flex justify-content-center mb-3">DAFTAR</h5>
          <hr>
          <div class="input-group mb-3">
            <label class="input-group-text" for="username" style="width: 15vh;">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" aria-label="Username" required="required">
          </div>
          <div class="input-group mb-3">
            <label class="input-group-text" for="password" style="width: 15vh;">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-label="Username" required="required">
          </div>
          <div class="d-grid gap-2 mb-3">
            <button type="submit" name="submit" class="btn btn-success">DAFTAR</button>
          </div>
          <a href="login.php">Sudah Punya Akun?</a>
        </div>
      </div>
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