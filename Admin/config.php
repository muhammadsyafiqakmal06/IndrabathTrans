<?php
// Informasi Koneksi Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "indrabath";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
