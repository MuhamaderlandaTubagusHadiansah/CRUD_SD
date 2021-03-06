﻿<?php
session_start();
//koneksi database 
$koneksi = new mysqli("localhost","root","","sd");

if (!isset($_SESSION['admin'])) {
  # code...
  echo "<script>alert('Anda Harus Login');</script>";
  echo "<script>location='login.php';</script>";
  exit();
}
function tglIndonesia($str){
  $tr   = trim($str);
  $str    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
  return $str;
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>10118118_Akademik</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <!--FOR TABLE -->
  <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootbox.min.js"></script>
</head>
<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Sekolah Dasar</a> 
      </div>
      <div style="color: white; padding: 15px 20px 15px 20px; float: right;font-size: 16px;"> 
        <span style="margin-right:20px"><?php echo tglIndonesia(date('D, d F, Y')); ?></span>
        <a href="index.php?page=logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
      </nav>   
      <!-- /. NAV TOP  -->
      <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="main-menu">
            <li class="text-center">
              <img style="padding: 15px 20px 15px 20px;" src="assets\img\sdn.jpeg">
            </li>
            <li><a href="index.php"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a href="index.php?page=guru"><i class="fa fa-user"></i> Guru</a></li>
            <li><a href="index.php?page=siswa"><i class="fa fa-users"></i> Siswa</a></li>
            <li><a href="index.php?page=pelajaran"><i class="fa fa-list"></i> Pelajaran</a></li>
            <li><a  href="index.php?page=pembelajaran"><i class="fa fa-list"></i> Pembelajaran</a>
            </li>
          </div>          
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner">
           <?php  
           if (isset($_GET['page']))
           {
            if ($_GET['page']=="admin")
            {
              include "admin.php";
            }
            else if ($_GET['page']=="pelajaran")
            {
              include "pelajaran.php";
            }
            else if ($_GET['page']=="tambahpelajaran")
            {
              include "tambahpelajaran.php";
            }
            else if ($_GET['page']=="editpelajaran")
            {
              include "editpelajaran.php";
            }
            else if ($_GET['page']=="hapuspelajaran")
            {
              include "hapuspelajaran.php";
            }
            else if($_GET['page']=="pembelajaran")
            {
              include "pembelajaran.php";
            }
            else if($_GET['page']=="tambahpembelajaran")
            {
              include "tambahpembelajaran.php";
            }
            else if($_GET['page']=="editpembelajaran")
            {
              include "editpembelajaran.php";
            }
            else if ($_GET['page']=="hapuspembelajaran")
            {
              include "hapuspembelajaran.php";
            }
            else if($_GET['page']=="siswa")
            {
              include "siswa.php";
            }
            else if ($_GET['page']=="tambahsiswa")
            {
              include "tambahsiswa.php";
            }
            else if($_GET['page']=="editsiswa")
            {
              include "editsiswa.php";
            }
            else if ($_GET['page']=="hapussiswa")
            {
              include "hapussiswa.php";
            }
            else if($_GET['page']=="guru")
            {
              include "guru.php";
            }
            else if ($_GET['page']=="tambahguru")
            {
              include "tambahguru.php";
            }
            else if ($_GET['page']=="hapusguru")
            {
              include "hapusguru.php";
            }
            else if ($_GET['page']=="editguru")
            {
              include "editguru.php";
            }
            else if($_GET['page']=="logout")
            {
              include "logout.php";
            }
          }
          else
          {
            include 'dashboard.php';
          }
          ?>
        </div>
        <!-- /. PAGE INNER  -->
      </div>
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