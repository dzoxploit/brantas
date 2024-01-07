<?php
include('../konn.php');
        $id        = $_POST['id'];
        $nik       = $_POST['nik'];
        $nama   = $_POST['nama'];
        $alamat  = $_POST['alamat'];
        $jabatan   = $_POST['jabatan'];
        $kategori   = $_POST['kategori'];
        $hari    = $_POST['hari'];
        $tglsatu     = $_POST['tanggal_satu'];
        $tgldua     = $_POST['tanggal_dua'];
        
           $insert ='INSERT INTO `absen`(`id`, `nik`, `nama`, `alamat`, `jabatan`, `kategori`, `hari`, `tglpertama`, `tgldua`) VALUES ("'.$id.'","'.$nik.'","'.$nama.'","'.$alamat.'","'.$jabatan.'","'.$kategori.'","'.$hari.'","'.$tglsatu.'","'.$tgldua.'")';
            $query  = mysqli_query($db_link,$insert);// query untuk menambahkan data ke dalam database
            
            if($query){ // jika query insert berhasil dieksekusi
              echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= ../../tambahabsen.php'/>  ";
        }
      ?>