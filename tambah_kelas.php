<?php
include "header_petugas.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div row">
            <div class="col-md-6">
            <div class="py-3">
                    <a class="btn btn-danger" href="tampil_kelas.php">Kembali</a>
                </div>
                <form class="form-horizontal hr" action="proses_tambah_kelas.php" method="post">
                    <h3 class="mb-4">Tambah Kelas</h3>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Kelas</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_kelas" class="form-control">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Kelompok</label>
                        <div class="col-sm-10">
                            <input type="text" name="kelompok" class="form-control">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <input type="submit" name="submit" value="Submit" class="btn btn-outline-primary">
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