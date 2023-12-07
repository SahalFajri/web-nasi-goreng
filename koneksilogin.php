<?php
// fungsi untuk memulai session
session_start();

// variabel kosong untuk menyimpan pesan error
$error = '';

// koneksi ke database
include_once 'database.php';

// cek apakah tombol sumit sudah di klik atau belum
if (isset($_POST['submit'])) {

    // cek apakah username atau password tidak kosong    
    if (empty($_POST['user']) || empty($_POST['pass'])) {
        // nilai variabel ini akan ditampilkan di halaman login jika kosong
        $error = 'Username atau Password tidak boleh kosong!';
    } else {
        // menyimpan data yang dikirim dari metode POST ke masing-masing variabel
        $username = $_POST['user'];
        $password = $_POST['pass'];

        // ambil data username dan password dari database
        $hasil = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username' AND password = '$password'");

        $rows = mysqli_num_rows($hasil);

        // validasi login benar atau salah
        if ($rows == 1) {

            $akun = mysqli_fetch_assoc($hasil);

            // cek jika yang login admin
            if ($akun['level'] == "admin") {
                $_SESSION['level'] = "admin";
                header("Location:halamanhome.php"); // arahkan ke homepage
            }

            // cek jika yang login user
            else if ($akun['level'] == "user") {
                $_SESSION['level'] = "user";
                header("Location:halamanhome.php"); // arahkan ke homepage
            } else {
                $error = 'Username / Password Salah!';
            }
        } else {

            // jika login salah maka variabel error diisi value seperti dibawah
            // nilai variabel ini akan ditampilkan di halaman login jika salah
            $error = 'Password atau username yang kamu masukkan salah!';
        }
    }
}

function kontak($data)
{ //untuk menambah data
    global $conn;

    // ambil data dari tiap elemen dalam form jadikan variabel
    $nama = htmlspecialchars($data["nama"]); //html... untuk mencegah masuknya script
    $email = htmlspecialchars($data["email"]);
    $pesan = htmlspecialchars($data["pesan"]);

    // query insert data
    $query = "INSERT INTO kontak VALUES('', '$nama', '$email', '$pesan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahakun($data)
{ //untuk menambah data
    global $conn;

    // ambil data dari tiap elemen dalam form jadikan variabel
    $username = htmlspecialchars($data["username"]); //html... untuk mencegah masuknya script
    $passwrod = htmlspecialchars($data["password"]);


    // cek akun di database
    $queryCek = "SELECT username FROM akun WHERE username = '$username'";

    $hasil = mysqli_query($conn, $queryCek);

    if (mysqli_fetch_assoc($hasil)) {
        echo "<script>alert('Username telah digunakan')</script>";
        return false;
    } else {
        // query insert data
        $query = "INSERT INTO akun VALUES('', '$username', '$passwrod', 'user')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
}
