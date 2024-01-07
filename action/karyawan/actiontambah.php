<?php
include('../konn.php');
        $nik         = $_POST['nik'];
        $nama        = $_POST['nama'];
        $jenis_kelamin   = $_POST['jenis_kelamin'];
        $tempat_lahir  = $_POST['tempat_lahir'];
        $tanggal_lahir   = $_POST['tanggal_lahir'];
        $alamat        = $_POST['alamat'];
        $no_telepon    = $_POST['no_telepon'];
        $jabatan     = $_POST['jabatan'];
        $status      = $_POST['status'];
        $statuskrj    = $_POST['status-krj'];
        
        $insert ='INSERT INTO `karyawan`(`nik`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telepon`, `jabatan`, `status`, `status_krj`) VALUES ("'.$nik.'","'.$nama.'","'.$jenis_kelamin.'","'.$tempat_lahir.'","'.$tanggal_lahir.'","'.$alamat.'","'.$no_telepon.'","'.$jabatan.'","'.$status.'","'.$statuskrj.'")';
        $query  = mysqli_query($db_link,$insert);// query untuk menambahkan data ke dalam database

           
            
        if($query){ // jika query insert berhasil dieksekusi
              echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= ../../tambahpegawai.php'/>  ";
        }
      ?>