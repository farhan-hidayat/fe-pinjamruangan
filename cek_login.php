<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = md5($_POST['password']);


// menyeleksi data user dengan email dan password yang sesuai
$login = mysqli_query($koneksi, "select * from user where email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah email dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai ADMIN
    if ($data['level'] == "ADMIN") {

        // buat session login dan email
        $_SESSION['email'] = $email;
        $_SESSION['level'] = "ADMIN";
        $_SESSION['username'] = $data['username'];
        $_SESSION['name'] = $data['name'];
        // alihkan ke halaman dashboard ADMIN
        header("location:admin/dashboard.php");

        // cek jika user login sebagai USER
    } else if ($data['level'] == "USER") {
        // buat session login dan email
        $_SESSION['email'] = $email;
        $_SESSION['level'] = "USER";
        $_SESSION['username'] = $data['username'];
        $_SESSION['name'] = $data['name'];
        // alihkan ke halaman dashboard USER
        header("location:user/dashboard.php");
    } else {

        // alihkan ke halaman login kembali
        header("location:login.php?pesan=gagal");
    }
} else {
    header("location:login.php?pesan=gagal");
}
