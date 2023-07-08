<?php
  include 'koneksi.php';

  if(isset($_POST['aksi'])){
    if($_POST['aksi'] =='add'){
     
      $ID_anggota = $_POST['ID_anggota'];
      $NM_anggota = $_POST['NM_anggota'];
      $foto_anggota = "img5.jpg";
      $tgl_lahir = $_POST['tgl_lahir'];
      $alamat = $_POST['alamat'];
      $status = $_POST['status'];

      $query = "INSERT INTO anggota VALUES('$ID_anggota', '$NM_anggota', '$foto_anggota', '$tgl_lahir', '$alamat', '$status')";
      $sql = mysqli_query($conn, $query);

      if($sql){
        header("location:index.php");
        //echo "Data Berhasil Ditambahkan <a href='index.php'>[Home]</a>";
      } else {
        echo $query;
      }

      //echo $ID_anggota. "|".$NM_anggota. "|".$foto_anggota. "|".$tgl_lahir. "|".$alamat. "|".$status;

        //echo"<br>Tambah Data <a href='index.php'>[Home]</a>";
    } else if ($_POST['aksi'] =='edit'){
        echo"Edit Data <a href='index.php'>[Home]</a>";
    }

  }

  if(isset($_GET['hapus'])){
    $NM_anggota = $_GET['hapus'];
    $query = "DELETE FROM anggota WHERE NM_anggota = '$NM_anggota';";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header("location: index.php");
        //echo "Data Berhasil Ditambahkan <a href='index.php'>[Home]</a>";
      } else {
        echo $query;
      }
    //echo"Hapus Data <a href='index.php'>[Home]</a>";
  }
?>