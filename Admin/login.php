<?php
session_start();
require_once("config.php");

// Periksa apakah formulir login dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Periksa apakah kedua bidang username dan password diisi
  if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    // Gantilah ini dengan validasi dan autentikasi yang sesuai
    $username = $_POST["username"];
    $password = md5($_POST["password"]); // Menggunakan MD5

    // Contoh: Periksa apakah username dan password valid
    $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      $_SESSION['username'] = $username;
      // Pengguna ditemukan, redirect ke halaman selanjutnya atau lakukan tindakan yang sesuai
      header("Location: dashboard.php");
      exit();
    } else {
      $error_message = "Username atau password salah.";
    }

    $stmt->close();
  } else {
    $error_message = "Silakan isi kedua Kolom.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img class="img-fluid" src="../images/indrabath.png" alt="">
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">LOGIN</p>
        <?php
        if (isset($error_message)) {
          echo '<div class="alert alert-danger" role="alert">' . $error_message . '</div>';
        }
        ?>
        <form action="#" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-danger btn-block">Sign In</button>
          <a href="register.php" style="text-decoration: none; color:black;">Register</a>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>