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
<h2>Daftar Buku</h2>
<a href="tambah_buku.php" class="btn btn-success">Tambah</a>
<div class="container">
    <div class="row">
        <?php 
        include "koneksi.php";
        $qry_buku=mysqli_query($conn,"select * from buku");
        while($dt_buku=mysqli_fetch_array($qry_buku)){
            ?>
            <div class="col-md-3">
                <div class="card" >
                  <img src="asset/<?=$dt_buku['foto']?>" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title"><?=$dt_buku['nama_buku']?></h5>
                    <p class="card-text"><?=substr($dt_buku['deskripsi'], 0,20)?></p>
                    <td><a href="ubah_buku.php?id_buku=<?= $data_buku['id_buku'] ?>" class="btn btn-success">Ubah</a> | <a href="hapus_buku.php?id_buku=<?= $data_buku['id_buku'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                  </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>

<?php
include "footer.php";
?>