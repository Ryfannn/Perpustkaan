<?php
include "header_petugas.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        include "koneksi.php";
        $qry_get_siswa = mysqli_query($conn, "select * from siswa where id_siswa='" . $_GET['id_siswa'] . "'");
        $dt_siswa = mysqli_fetch_array($qry_get_siswa);
        ?>
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-4">Ubah Siswa</h3>
                <form action="proses_ubah_siswa.php" method="post">
                    <input type="hidden" name="id_siswa" value="<?= $dt_siswa['id_siswa'] ?>">
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Nama Siswa</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_siswa" value="<?= $dt_siswa['nama_siswa'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" name="tanggal_lahir" value="<?= $dt_siswa['tanggal_lahir'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Geneder</label>
                        <div class="col-sm-10">
                            <?php
                            $arr_gender = array('L' => 'Laki-laki', 'P' => 'Perempuan');
                            ?>
                            <select class="form-control" name="gender" id="">
                                <?php
                                foreach ($arr_gender as $key_gender => $val_gender) : if ($key_gender == $dt_siswa['gender']) {
                                        $selek = "selected";
                                    } else {
                                        $selek = "";
                                    }
                                ?>
                                    <option value="<?= $key_gender ?>" <?= $selek ?>><?= $val_gender ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Alamat</label>
                        <div class="col-sm-10">
                            <textarea name="nama_siswa" " class=" form-control"><?= $dt_siswa['alamat'] ?></textarea>
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Kelas</label>
                        <div class="col-sm-10">
                            <select name="id_kelas" class="form-control">
                                <option></option>
                                <?php
                                include "koneksi.php";
                                $qry_kelas = mysqli_query($conn, "select * from kelas");
                                while ($data_kelas = mysqli_fetch_array($qry_kelas)) {
                                    if ($data_kelas['id_kelas'] == $dt_siswa['id_kelas']) {
                                        $selek = "selected";
                                    } else {
                                        $selek = "";
                                    }
                                    echo '<option value="' . $data_kelas['id_kelas'] . '" ' . $selek . '>' . $data_kelas['nama_kelas'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Username</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" value="<?= $dt_siswa['username'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label class="col-sm-2 con-form-label" for="fname">Password</label>
                        <div class="col-sm-10">
                            <input type="text" name="password" value="<?= $dt_siswa['password'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <div class="col-sm-10">
                            <input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary">
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