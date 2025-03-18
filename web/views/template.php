<?php

$path = TemplateController::path();

// echo $path;

?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pacs Computacion</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <!-- CSS -->

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="views/assets/css/plugins/fontawesome-free/css/all.min.css">

  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- JDSlider -->
  <link rel="stylesheet" href="views/assets/css/plugins/jdSlider/jdSlider.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="views/assets/css/plugins/adminlte/adminlte.min.css">

  <link rel="stylesheet" href="views/assets/css/template/template.css">

  <link rel="stylesheet" href="views/assets/css/products/products.css">

  <!-- JS -->

  <!-- jQuery -->
  <script src="views/assets/js/plugins/jquery/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JDSlider 
  https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
  <script src="views/assets/js/plugins/jdSlider/jdSlider.js"></script>

  <!-- Knob -->
  <script src="views/assets/js/plugins/knob/knob.js"></script>

</head>

<body class="hold-transition sidebar-collapse layout-top-nav">
<div class="wrapper">

	<?php 

  include "modules/top.php"; 
  include "modules/navbar.php"; 
  include "modules/sidebar.php"; 
  include "pages/home/home.php";
  include "modules/footer.php"; 

  ?>

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- AdminLTE App -->
<script src="views/assets/js/plugins/adminlte/adminlte.min.js"></script>
<script src="views/assets/js/products/products.js"></script>

</body>
</html>


