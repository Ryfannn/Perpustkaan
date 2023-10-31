<?php
include "header_petugas.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="py-3">
                    <a class="btn btn-danger" href="tampil_siswa.php">Kembali</a>
                </div>
                <form class="form-horizontal hr" action="proses_tambah_siswa.php" method="post">
                    <h3 class="mb-4">Tambah Siswa</h3>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Nama Siswa</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="nama_siswa">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Gender</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="gender" id="">
                                <option value="l">Laki-Laki</option>
                                <option value="p">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="alamat" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Kelas</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="id_kelas" id="">
                                <option></option>
                                <?php
                                include "koneksi.php";
                                $qry_kelas = mysqli_query($conn, "select * from kelas");
                                while ($data_kelas = mysqli_fetch_array($qry_kelas)) {
                                    echo '<option value="' . $data_kelas['id_kelas'] . '">' . $data_kelas['nama_kelas'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Username</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="username">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Password</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="password" name="password">
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