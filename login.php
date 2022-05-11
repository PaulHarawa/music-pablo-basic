<?php

  include 'conn.php';
  session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Music Pablo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon2.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v5.8.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .navbar .dropdown ul .search{
      border: none;
      width: 100%;
      color: #18A66E;
      border-bottom: 1px solid #18d26e;
      font-family: Impact;
    }
    .navbar .dropdown ul .btn{
      font-family: verdana;
      width: 100%;
      letter-spacing: 2px;
    }
    .navbar .dropdown ul .search:active{
      border: none;
      width: 100%;
      color: #18A66E;
      border-bottom: 1px solid #18d26e;
    }
    .navbar .dropdown ul .search::placeholder{
      color: #18A66E;
    }
    .section-header-new h3 {
      color: #fff;
    }
    .section-header-new p {
      color: #fff;
      font-family: verdana;
    }
    .number{
      font-size: 22px;
      color: black;
      font-weight: bold;
    }
    #trending .title {
      margin-left: 60px;
      font-weight: 700;
      margin-bottom: 15px;
      font-size: 20px;
      text-transform: uppercase;
    }
    #trending .description {
      font-size: 14px;
      margin-left: 0px;
      line-height: 24px;
      margin-bottom: 0;
    }
    .aname{
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
      font-size: 15px;
    }
    .aname a{
      color: #18A66E;
    }
    .aname a:hover{
      color: #18d26e;
    }
    .sname{
      text-transform: capitalize;
      font-size: 13px;
    }
    .iconx{
      font-size: 30px;
      color: #18A66E;
    }
    .iconx:hover{
      color: #18d26e;
      transition: 0.5s;
    }
    .boxbg{
      background-color: rgba(245, 249, 250);
    }
    .box1{
      text-align: center;
    }
    .box1 .single-artist:hover{
      color: #18A66E;
    }
    .box1 .boxSmall{
      display: inline-flex;
    }
    .aa{
      text-decoration: none;
      padding: 8px 12px 8px 12px;
      background-color: #18A66E;
      color: white;
    }
    .aa:hover{
      background-color: #18d26e;
      color: white;
    }
    .navbar .dropdown1 ul {
      display: block;
      position: absolute;
      left: 14px;
      top: calc(100% + 30px);
      margin: 0;
      padding: 10px 0;
      z-index: 99;
      opacity: 0;
      visibility: hidden;
      background: #fff;
      box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
      transition: 0.3s;
      min-width: 200px;
    }
    .navbar .dropdown1 ul li {
      min-width: 50px;
      display: inline-flex;
    }
    .navbar-mobile .dropdown1 ul {
      position: static;
      display: none;
      margin: 10px 20px;
      padding: 10px 0;
      z-index: 99;
      opacity: 1;
      visibility: visible;
      background: #fff;
      box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
      min-width: 200px;
    }
    .navbar-mobile .dropdown1 ul li {
      min-width: 50px;
      display: inline-flex;
    }
    .aotw{
      color: #18A66E;
      font-size: 20px;
      font-family: monospace;
    }
    #hero .carousel .carousel-inner .carousel-item .carousel-container p{
      font-family: verdana;
    }
    #featured-trending .container .row .box img{
      width: 130px;
    }
    #featured-trending .container .row .box .title a{
      color: #18A66E;
      font-family: monospace;
    }
    #featured-trending .container .row .box .title a:hover{
      color: #18d26e;
    }
    #topten .topten-col h2 a {
      font-family: monospace;
    }
    #topten .topten-col h2 a:hover {
      color: #18A66E;
    }
    #portfolio{
      background-color: rgb(5, 9, 18);
    }
    #portfolio .section-title{
      color: #fff;
    }
    #portfolio p{
      color: #fff;
    }
    #portfolio .portfolio-item .portfolio-info h4 a {
      color: #18A66E;
    }
    #portfolio .portfolio-item .portfolio-info p {
      color: rgb(5, 9, 18);
      font-size: 12px;
    }
    .icon {
      float: left;
    }
    .icon i {
      color: #18d26e;
      font-size: 36px;
      line-height: 0;
      transition: 0.5s;
    }
    .single-artist{
      width: 100%;
      display: inline-flex;
    }
    .contain{
      text-align: center;
      margin: auto;
    }
    .classX{
      color: #18d26e;
      font-size: 50px;
    }
    #topten{
      min-height: 100vh;
    }
    
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <!-- End Header -->

  <!-- ======= hero Section ======= -->
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= Featured trending Section Section ======= -->
    <!-- End Featured trending Section -->

    <!-- ======= topten Us Section ======= -->
    <section id="topten">
      <div class="container" data-aos="fade-up">

        <header class="section-header section-header-new">
          <br>
          <h3>Login</h3>
        </header>
        <br>

        <div class="row">

        <div class="col-12 box1" data-aos="fade-up" data-aos-delay="100">
            <br>
            <div class="col-10 contain">
                <div class="col-12">
                  <span class="bi bi-person-circle classX"></span>
                </div>
                <div class="col-12">
                  <br>
                  <form action="login.php" method="post">
                    <input type="text" name="username" id="" placeholder="Username"> <br><br>
                    <input type="password" name="password" id="" placeholder="Password">
                    <br>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-sm btn-success" name="login">Log In</button>
                  </form>
                  <br>
                  <?php 
                  
                    if(isset($_POST['login'])){
                      $username = $_POST['username'];
                      $password = $_POST['password'];

                      $encpass = sha1($password);

                      $sql = "SELECT * FROM admin WHERE username='$username' AND password='$encpass'";
                      $result = mysqli_query($conn, $sql);

                      if($result){
                        if(mysqli_num_rows($result)>0){
                          $_SESSION['admin'] = $username;
                          echo"<script>window.location.href='admin.php';</script>";
                        }
                        else{
                          echo"<div class='col-12 text-danger'>Wrong Username and/or Password</div>";
                        }
                      }
                      else{
                        echo"<div class='col-12 text-danger'>Failed to execute query</div>";
                      }
                    }
                  
                  ?>
                </div>
            </div>

          </div>

        </div>

      </div>
      <br>
      <br>
      <br>
    </section><!-- End topten Us Section -->

    <!-- ======= trending Section ======= -->
    <!-- End trending Section -->

    <!-- ======= Call To Action Section ======= -->
    <!-- End Call To Action Section -->

    <!-- ======= Skills Section ======= -->
    <!-- End Skills Section -->

    <!-- ======= Facts Section ======= -->
    <!-- End Facts Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- End Portfolio Section -->

    <!-- ======= Our Clients Section ======= -->
    <!-- End Our Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>