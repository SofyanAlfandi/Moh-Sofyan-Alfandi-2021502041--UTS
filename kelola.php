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
    <nav class="navbar navbar-liht bg-light mb-4">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">
                CRUD-BS5
            </a>
            </div>
    </nav>
        <div class="container">
            <form method="POST" action="proses.php">
                <div class="mb-3 row">
                    <label for="ID_anggota" class="col-sm-2 col-form-label">
                        ID_anggota</label>
                    <div class="col-sm-10">
                        <input type="text" name="ID_anggota" class="form-control" id="ID_anggota" placeholder="Ex: 112233">
                    </div>
                    </div>
                    <div class="mb-3 row">
                    <label for="NM_anggota"  class="col-sm-2 col-form-label">
                        NM_anggota</label>
                    <div class="col-sm-10">
                        <input type="text" name="NM_anggota"class="form-control" id="NM_anggota" placeholder="Ex: 112233">
                    </div>
                    </div>  
                    <div class="mb-3 row">
                    <label for="foto"  class="col-sm-2 col-form-label">
                        Foto anggota</label>
                    <div class="col-sm-10">
                        <input name="foto_anggota" class="form-control" type="file" id="formFile">
                    </div>
                    </div>
                    <div class="mb-3 row">
                    <label for="tgl_lahir"  class="col-sm-2 col-form-label">
                        tgl_lahir</label>
                    <div class="col-sm-10">
                        <input type="text" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Ex: 112233">
                    </div>
                    </div>
                    <div class="mb-3 row">
                    <label for="Alamat" class="col-sm-2 col-form-label">
                        Alamat lengkap</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Status"  class="col-sm-2 col-form-label">
                        Status</label>
                    <div class="col-sm-10">
                        <input type="text" name="status" class="form-control" id="Status" placeholder="Ex: 112233">
                    </div>
                    </div>
                    <div class="mb-3 row mt-4">
                    <div class="col">
                        <?php
                        if(isset($_GET['ubah'])){
                        ?>
                            <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            Simpan Perubahan
                            </button>
                        <?php
                            } else {
                            ?>
                                <button  type="submit" name="aksi" value="add" class="btn btn-primary">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                        Tambahkan
                            </button>
                        <?php
                            }
                        ?>
                        <a href="index.php" type="button" class="btn btn-danger">
                        <i class="fa fa-reply" aria-hidden="true"></i>
                            Batal
                        </a>
                    </div>     
                </div> 
            </form>
        </div>
    </div>
</body>
</html>