<?php
// memanggil file config.php untuk melakukan koneksi database
include 'config.php';
// membuat variabel untuk menampung data dari form
$id = $_POST['id'];
$gambar_produk = $_FILES['foto']['name'];
$nama_produk   = $_POST['nama'];
$deskripsi     = $_POST['deskripsi'];
//cek dulu jika merubah gambar produk jalankan coding ini
if ($gambar_produk != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar_produk); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $gambar_produk; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, '../images/' . $nama_gambar_baru); //memindah file gambar ke folder images
        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $query  = "UPDATE mobil SET foto = '$nama_gambar_baru', nama = '$nama_produk', deskripsi = '$deskripsi'";
        $query .= "WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($conn) .
                " - " . mysqli_error($conn));
        } else {
            //tampil alert dan akan redirect ke halaman gallery.php
            header("<script>alert('Data berhasil diubah.');</script>", "Location: gallery.php");
        }
    } else {
        //jika file ekstensi tidak jpg, jpeg dan png maka alert ini yang tampil
        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg atau png.');window.location='edit.php';</script>";
    }
} else {
    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query  = "UPDATE mobil SET nama = '$nama_produk', deskripsi = '$deskripsi'";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($conn) .
            " - " . mysqli_error($conn));
    } else {
        //tampil alert dan akan redirect ke halaman gallery.php
        header("Location: gallery.php",);
    }
}
