<?php
include('konn.php'); // Load file koneksi.php
$nik         = $_POST['nik'];
$query = mysqli_query($db_link, "SELECT * FROM karyawan WHERE nik='".$nik."'"); // Tampilkan data siswa dengan NIS tersebut
$row = mysqli_num_rows($query); // Hitung ada berapa data dari hasil eksekusi $query
if($row > 0){ // Jika data lebih dari 0
  $data = mysqli_fetch_array($query); // ambil data siswa tersebut
  
  // BUat sebuah array
  $callback = array(
    'status' => 'success', // Set array status dengan success
    'nama' => $data['nama'], // Set array nama dengan isi kolom nama pada tabel siswa
    'alamat' => $data['alamat'], // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
    'jabatan' => $data['jabatan'], // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
  );
}else{
  $callback = array('status' => 'failed'); // set array status dengan failed
}
echo json_encode($callback); // konversi varibael $callback menjadi JSON
?>