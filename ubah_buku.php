<?php
include "header_petugas.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        include "koneksi.php";
        $qry_get_buku = mysqli_query($conn, "select * from buku where id_buku='" . $_GET['id_buku'] . "'");
        $dt_buku = mysqli_fetch_array($qry_get_buku);
        ?>
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-4">Ubah buku</h3>
                <form action="proses_ubah_buku.php" method="post">
                    <input type="hidden" name="id_buku" value="<?= $dt_buku['id_buku'] ?>">
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Nama buku</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_buku" value="<?= $dt_buku['nama_buku'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Pengarang</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" value="<?= $dt_buku['pengarang'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea name="nama_buku" " class=" form-control"><?= $dt_buku['deskripsi'] ?></textarea>
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <div class="col-sm-10">
                            <input type="submit" name="simpan" value="Ubah buku" class="btn btn-primary">
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