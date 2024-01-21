<!DOCTYPE html>
<html>

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Indrabath Trans | Kendaraan</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- font css -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php"><img src="images/indrabath.png" width="150" height="30"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="tarif.php">Tarif Pelayanan</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="pelayanan.php">Pelayanan</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="gallery.php">Kendaraan</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="testimoni.php">Testimoni</a>
                  </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
               </form>
            </div>
         </nav>
      </div>
   </div>
   <!-- header section end -->
   <div class="call_text_main">
      <div class="container">
         <div class="call_taital">
            <div class="call_text"><a href="https://maps.app.goo.gl/TBtGCJ6Q6QyGUKs29" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_15">CV. Indrabath</span></a></div>
            <div class="call_text"><a href="https://wa.me/+6287717921322" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">087717921322</span></a></div>
         </div>
      </div>
   </div>
   <!-- header section end -->
   <!-- gallery section start -->
   <div class="gallery_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 class="gallery_taital">Kendaraan</h1>
            </div>
         </div>
         <div class="gallery_section_2">
            <div class="row">
               <?php
               include 'Admin/config.php';

               // Jalankan query SELECT untuk mendapatkan data dari tabel mobil
               $query = "SELECT * FROM mobil";
               $result = mysqli_query($conn, $query);

               if (!$result) {
                  die("Gagal mengambil data: " . mysqli_error($conn));
               }

               foreach ($result as $x) {
               ?>

                  <div class="col-md-4">
                     <div class="gallery_box text-center">
                        <div class="gallery_img"><img src="images/<?php echo $x['foto']  ?>"></div>
                        <h3 class="types_text"><?php echo $x['nama']  ?></h3>
                        <p class="looking_text"><?php echo $x['deskripsi']  ?></p>
                        <div class="read_bt"><a href="https://wa.me/+6287717921322?text=Assalamualaikum%20Wr.%20Wb.%0AHalo%20saya%20ingin%20memesan%20Mobil%20<?php echo $x['nama'] ?>" target="_blank">Pesan Sekarang</a></div>
                     </div>
                  </div>

               <?php  }; ?>


            </div>
         </div>
      </div>
   </div>
   <!-- gallery section end -->
   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="footeer_logo"><img src="images/indrabath.png" style="width: 25%;"></div>
            </div>
         </div>
         <div class="footer_section_2" align="center">
            <div class="row">
               <div class="col-md-6">
                  <h4 class="footer_taital">Information</h4>
                  <div class="mapouter">
                     <div class="gmap_canvas"><iframe width="220" height="195" id="gmap_canvas" src="https://maps.google.com/maps?q=-6.490170325674756%2C+108.29690685298064&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://textcaseconvert.com/"></a><br><a href="https://timenowin.net/"></a><br>
                        <style>
                           .mapouter {
                              position: relative;
                              text-align: right;
                              height: 195px;
                              width: 220px;
                           }
                        </style><a href="https://www.mapembed.net">google maps embed iframe</a>
                        <style>
                           .gmap_canvas {
                              overflow: hidden;
                              background: none !important;
                              height: 195px;
                              width: 220px;
                           }
                        </style>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <h4 class="footer_taital">Contact Us</h4>
                  <div class="location_text"><a href="https://maps.app.goo.gl/TBtGCJ6Q6QyGUKs29" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_15">CV. Indrabath</span></a></div>
                  <div class="location_text"><a href="https://wa.me/+6287717921322"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">087717921322</span></a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <p class="copyright_text">2023 All Rights Reserved. Design by Indrabath Team.</p>
            </div>
         </div>
      </div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>