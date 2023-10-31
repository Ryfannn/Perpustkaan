<?php
include "header_petugas.php";
?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <div class="container">

        <h3>Tampil kelas</h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KELOMPOK</th>
                    <th>KELAS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $qry_kelas = mysqli_query($conn, "SELECT * from kelas");
                $no = 0;
                while ($data_kelas = mysqli_fetch_array($qry_kelas)) {
                    $no++; ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data_kelas['kelompok'] ?></td>
                        <td><?= $data_kelas['nama_kelas'] ?></td>
                        <td><a href="ubah_kelas.php?id_kelas=<?= $data_kelas['id_kelas'] ?>" class="btn btn-success">Ubah</a> | <a href="hapus_kelas.php?id_kelas=<?= $data_kelas['id_kelas'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <a href="tambah_kelas.php" class="btn btn-success">Tambah</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>

<?php
include "footer.php";
?>