 <?php
    include 'koneksi.php';

    $query = "SELECT * FROM anggota;";
    $sql = mysqli_query($conn, $query);
    $No=0;

 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js" ></script>

    <!-- font awesome-->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

    <title>tugas</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            CRUD-BS5
        </a>
        </div>
    </nav>

<!-- JUDUL-->
<div class="container">
    <h1 class="mt-4"> Data Perpus</h1>
    <figure>
        <blockquote class="blockquote">
            <p>Berisi Data Penting</p>
        </blockquote>
        <figcaption class="blockquote-footer">
        CRUD <cite title="Source Title">SCreate UPDATE | DELETE</cite>
    </figcaption>
    </figure>
     <a href="kelola.php" type="button" class="btn btn-primary mb-3">
        <i class="fa fa-plus"></i>
        Tambah Data
    </a>
    <div class="table-responsive">
    <table class="table align-middle table-bordered table-hover">
        <thead>
            <tr>
                <th><center.>No.</center.></th>
                <th>ID_anggota</th>
                <th>NM_anggota</th>
                <th>foto_anggota</th>
                <th>tgl_lahir</th> 
                <th>Alamat</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($result = mysqli_fetch_assoc($sql)){   
            ?>
            <tr>
                <td><center.>
                    <?php echo ++$No;?>.
                </center.></td> 
                <td>
                    <?php echo $result['ID_anggota'];?>
                </td>
                <td>
                    <?php echo $result['NM_anggota'];?>
                </td>
                <td>
                    <img src="img/<?php echo $result['foto_anggota'];?>" style="width: 150px;">
                </td>
                <td>
                    <?php echo $result['tgl_lahir'];?>
                </td>
                <td>
                    <?php echo $result['alamat'];?>
                </td>
                <td>
                    <?php echo $result['status'];?>
                </td>
                <td>
                <a href="kelola.php?ubah=<?php echo $result['ID_anggota'];?>" type='button' class="btn btn-success btn-sm">
                    <i class="fa fa-pencil"></i>
                </a>
                <a href="proses.php?hapus=<?php echo $result['ID_anggota'];?>" type='button' class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda akin ingin menghapus???')">
                    <i class="fa fa-trash"></i>
                </a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
</div>
</body>
</html>
