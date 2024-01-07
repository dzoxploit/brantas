<?php
include('../konn.php');
        $nik         = $_POST['nik'];
        $nama        = $_POST['nama'];
        $jabatan   = $_POST['jabatan'];
        $username  = $_POST['username'];
        $password   = $_POST['password'];
        
            $insert ='INSERT INTO `user`(`id_login`, `nama_user`, `jabatan`, `user_karyawan`, `password`) VALUES ("'.$nik.'","'.$nama.'","'.$jabatan.'","'.$username.'","'.$password.'")';
            $query  = mysqli_query($db_link, $insert);// query untuk menambahkan data ke dalam database
            
            if($query){ // jika query insert berhasil dieksekusi
              echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= ../../tambahadmin.php'/>  ";
        }
      ?>