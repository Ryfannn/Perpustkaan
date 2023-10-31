<?php
include "header_petugas.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="py-3">
                    <a class="btn btn-danger" href="tampil_buku.php">Kembali</a>
                </div>
                <form class="form-horizontal hr" action="proses_tambah_buku.php" method="post">
                    <h3 class="mb-4">Tambah buku</h3>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Nama buku</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="nama_buku">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Pengarang</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="pengarang">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="deskripsi" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <div class="col-sm-10">
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>

<?php
include "footer.php";
?>