<div class="table-responsive">
  <table class="table table-bordered">
    <tr>
      <th>id</th>
   <th>Nik</th>
   <th>Nama</th>
   <th>alamat</th>
   <th>jabatan</th>
   <th>kategori</th>
   <th>hari</th>
   <th>dari tanggal</th>
   <th>sampai tanggal</th>
    </tr>
    <?php
    // Include / load file koneksi.php
    include "koneksi.php";
    
    // Cek apakah variabel $keyword tersedia
    // Artinya cek apakah user telah mengklik tombol search atau belum
    // variabel $keyword ini berasal dari file search.php,
    // dimana isinya adalah apa yang diinput oleh user pada textbox pencarian
    if(isset($keyword)){ // Jika veriabel $keyword ada (user telah mengklik tombol search)
      $param = '%'.$keyword.'%';
      
      // Buat query untuk menampilkan data siswa berdasarkan NIS / Nama / Jenis Kelamin / Telp / Alamat
      $sql = $pdo->prepare("SELECT * FROM absen WHERE id LIKE :id OR nik LIKE :nk OR nama LIKE :nm OR alamat LIKE :a OR jabatan LIKE :jb OR
        kategori LIKE :kt OR hari LIKE :h OR tglpertama LIKE :tp OR tgldua LIKE td");
      $sql->bindParam(':id', $param);
      $sql->bindParam(':nk', $param);
      $sql->bindParam(':nm', $param);
      $sql->bindParam(':a', $param);
      $sql->bindParam(':jb', $param);
      $sql->bindParam(':kt', $param);
      $sql->bindParam(':h', $param);
      $sql->bindParam(':tp', $param);
      $sql->bindParam(':td', $param);
      $sql->execute(); // Eksekusi querynya
    }else{ // Jika user belum mengklik tombol search
      // Buat query untuk menampilkan semua data siswa
      $sql = $pdo->prepare("SELECT * FROM absen");
      $sql->execute(); // Eksekusi querynya
    }
    
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <tr>
        <td class="align-middle"><?php echo $data['id']; ?></td>
        <td class="align-middle"><?php echo $data['nik']; ?></td>
        <td class="align-middle"><?php echo $data['nama']; ?></td>
        <td class="align-middle"><?php echo $data['alamat']; ?></td>
        <td class="align-middle"><?php echo $data['jabatan']; ?></td>
         <td class="align-middle"><?php echo $data['kategori']; ?></td>
          <td class="align-middle"><?php echo $data['hari']; ?></td>
           <td class="align-middle"><?php echo $data['tglpertama']; ?></td>
            <td class="align-middle"><?php echo $data['tgldua']; ?></td>
      </tr>
    <?php
      $no++; // Tambah 1 setiap kali looping
    }
    ?>
  </table>
</div>