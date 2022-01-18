<?php
session_start() ;
include 'koneksi.php';
if(!isset($_SESSION['admin']))
{
  echo "<div class='alert alert-danger'>Login gagal</div>";
  echo "<script>location='login.php'</script>";
  header('location:login.php');
  exit();
}
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="gaya/al.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery1.11.3.js"></script>


      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Commers Maul Store</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body background-color="white">
    <div>
           <!-- /. NAV TOP  -->
          <nav class="navbar navbar-inverse">
            <div class="container-fluid">
             <div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                  <li><a href="index.php?halaman=produk"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>  Produk</a></li>
                  <li><a href="index.php?halaman=pembelian"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>  Pembelian</a></li>
                  <li><a href="index.php?halaman=pelanggan"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Pelanggan</a></li>
                  <li><a href="index.php?halaman=logout"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout</a></li>
                </ul>
              </div>
            </div>
          </nav> 

    <?php
      if (isset($_GET['halaman']))
        {
          if ($_GET['halaman']=="produk")
          {
            include 'produk.php';
          }
          elseif ($_GET['halaman']=="pembelian")
          {
            include 'pembelian.php';
          }
          elseif ($_GET['halaman']=="pelanggan")
          {
            include 'pelanggan.php';
          }
          elseif ($_GET['halaman']=="detail")
          {
            include 'detail.php';
          }
          elseif ($_GET['halaman']=="tambahproduk")
          {
            include 'tambahproduk.php';
          }
          elseif ($_GET['halaman']=="hapusproduk")
          {
            include 'hapusproduk.php';
          }
          elseif ($_GET['halaman']=="ubahproduk")
          {
            include 'ubahproduk.php';
          }
          elseif ($_GET['halaman']=="pembayaran")
          {
            include 'pembayaran.php';
          }
          elseif ($_GET['halaman']=="logout")
          {
            include 'logout.php';
          }
        }
        else
        {
          include 'home.php';
        }
      ?>



    <div class="container">
     
        <!-- /. NAV SIDE  -->
        
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
