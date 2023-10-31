<?php 
    include "header.php";
?>
<div class="container">
    <div class="jumbotron">
        <h1>Selamat datang <?=$_SESSION['nama_siswa']?> di website Perpus Online</h1>
        <p>Temukan dan pinjam ribuan buku berkualitas dari koleksi perpustakaan kami.</p>
        <p>
            <a class="btn btn-primary btn-lg" href="buku.php" role="button">Lihat Koleksi Buku</a>
        </p>
    </div>
</div>
<?php
    include "footer.php";
?>

