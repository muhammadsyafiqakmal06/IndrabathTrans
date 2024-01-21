<?php
include 'config.php';

// Ambil ID dari parameter URL
$id = $_GET["id"];

// Jalankan query SELECT untuk mendapatkan nama file gambar
$query_select = "SELECT foto FROM mobil WHERE id='$id'";
$result_select = mysqli_query($conn, $query_select);

if (!$result_select) {
    die("Gagal mengambil data: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result_select);
$foto = $row['foto'];

// Hapus file gambar dari folder images
$gambar_path = "../images/" . $foto;
if (file_exists($gambar_path)) {
    unlink($gambar_path);
}

// Jalankan query DELETE untuk menghapus data
$query_delete = "DELETE FROM mobil WHERE id='$id'";
$hasil_query = mysqli_query($conn, $query_delete);

// Periksa query, apakah ada kesalahan
if (!$hasil_query) {
    die("Gagal menghapus data: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
} else {
    header("Location: gallery.php");
}
