<?php
if ($_POST) {
    $nama_buku = $_POST['nama_buku'];
    $pengarang = $_POST['pengarang'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_POST['foto'];
    if (empty($nama_buku)) {
        echo "<script>alert('Nama buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } elseif (empty($pengarang)) {
        echo "<script>alert('Pengarang tidak boleh kosong');location.href='tambah_buku.php'</script>";
    } elseif (empty($deskripsi)) {
        echo "<script>alert('Deskripsi tidak boleh kosong');location.href='tambah_buku.php'</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO buku (nama_buku,pengarang,foto,deskripsi) VALUES ('" . $nama_buku . "','" . $pengarang . "','" . $foto . "','" . $deskripsi . "')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan buku');location.href='tambah_buku.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan buku');location.href='tambah_buku.php';</script>";
        }
    }
}
