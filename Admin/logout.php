<?php
session_start(); // Mulai session

// Hapus semua data session
session_destroy();

// Redirect ke halaman login
header("Location: login.php");
exit();
