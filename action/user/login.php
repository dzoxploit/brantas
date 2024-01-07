<?php
session_start(); // Memulai Session
$error = ''; // Variabel untuk menyimpan pesan error

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    } else {
        // Variabel username dan password
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Membangun koneksi ke database
        $connection = mysqli_connect("localhost", "root", "", "absensi");

        // Mencegah MySQL injection
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);


        // SQL query untuk memeriksa apakah karyawan terdapat di database
        $query = mysqli_query($connection, "SELECT * FROM users WHERE `password` ='$password' AND user_karyawan='$username'");

        // Checking the number of rows
        $rows = mysqli_num_rows($query);

		var_dump($query);

        if ($rows == 1) {
            $_SESSION['login_user'] = $username; // Membuat Sesi/session
            header("location: index.php"); // Mengarahkan ke halaman profil
            exit(); // Ensure that script stops execution after redirection
        } else {
            $error = "Username atau Password belum terdaftar";
        }

        mysqli_close($connection); // Menutup koneksi
    }
}
?>
