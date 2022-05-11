<?php 

  include '../conn.php';

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
  <link href="../assets/img/icon2.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

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
      width: 80%;
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
    .small-box-one{
      text-align: left;
    }
    
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="../index.php">Music Pablo</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="../index.php">Home</a></li>
              <li class="dropdown"><a href="#"><span>Genre</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="../genre/afro.php" class="active">Afro Pop</a></li>
                  <li><a href="../genre/dancehall.php">Dance Hall</a></li>
                  <li><a href="../genre/hiphop.php">Hip Hop</a></li>
                  <li><a href="../genre/gospel.php">Gospel</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Search</span> <i class="bi bi-chevron-down"></i></a>
                <ul class="text-center">
                  <form action="../search.php" method="post">
                    <li><a href="#"><input name="search-term" type="text" class="search" placeholder="artist's name..." required></a></li>
                    <li><button class="btn btn-sm btn-success" name="search">search</button></li>
                  </form>
                </ul>
              </li>
              <li class="dropdown dropdown1"><a href="#"><span>A - Z</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="number.php" class="p-2">#</a></li>
                  <li><a href="a.php" class="p-2">A</a></li>
                  <li><a href="b.php" class="p-2">B</a></li>
                  <li><a href="c.php" class="p-2">C</a></li>
                  <li><a href="d.php" class="p-2">D</a></li>
                  <li><a href="e.php" class="p-2">E</a></li>
                  <li><a href="f.php" class="p-2">F</a></li>
                  <li><a href="g.php" class="p-2">G</a></li>
                  <li><a href="h.php" class="p-2">H</a></li>
                  <li><a href="i.php" class="p-2">I</a></li>
                  <li><a href="j.php" class="p-2">J</a></li>
                  <li><a href="k.php" class="p-2">K</a></li>
                  <li><a href="l.php" class="p-2">L</a></li>
                  <li><a href="m.php" class="p-2">M</a></li>
                  <li><a href="n.php" class="p-2">N</a></li>
                  <li><a href="o.php" class="p-2">O</a></li>
                  <li><a href="p.php" class="p-2">P</a></li>
                  <li><a href="q.php" class="p-2">Q</a></li>
                  <li><a href="r.php" class="p-2">R</a></li>
                  <li><a href="s.php" class="p-2">S</a></li>
                  <li><a href="t.php" class="p-2">T</a></li>
                  <li><a href="u.php" class="p-2">U</a></li>
                  <li><a href="v.php" class="p-2">V</a></li>
                  <li><a href="w.php" class="p-2">W</a></li>
                  <li><a href="x.php" class="p-2">X</a></li>
                  <li><a href="y.php" class="p-2">Y</a></li>
                  <li><a href="z.php" class="p-2">Z</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="#footer">Upload</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>
    </div>
  </header><!-- End Header -->

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
          <h3>c</h3>
        </header>
        <br>

        <div class="row">

        <div class="col-12 box1" data-aos="fade-up" data-aos-delay="100">
            <br>
            <?php 
            
            $sql = "SELECT * FROM artists WHERE artist LIKE 'c%'";
            $result = mysqli_query($conn,$sql);

            while($row=mysqli_fetch_array($result)){
              $artist = $row['artist'];
              $link = $row['link'];
              $genre = $row['genre'];
              $picture = $row['picture'];

              echo"
              
              <div class='col-12 col-lg-4 col-md-4 boxSmall p-2'>
                <div class='single-artist'>
                  <div class='col-3'>
                    <a href='$link'><span class='bi bi-soundwave iconx'></span></a>
                  </div>
                  <div class='col-9 small-box-one'>
                    <p><span class='aname'><a href='$link'>$artist</a></span><br><span class='sname'>$genre</span></p>
                  </div>
                </div>
              </div>
              
              ";

            }


            
            ?>
            

          </div>

        </div>

      </div>
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
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Music Pablo</h3>
            <p>
              upload <b>3 Songs at K 1, 500</b> and <b>1 Song at K 800</b>, comes with a free profile!
            </p>
            <br>
            <div class="social-links">
              <a href="tel:+265999358339" class="twitter"><i class="bi bi-telephone"></i></a> +265 999 358 339<br><br>
              <a href="tel:+265999358339" class="facebook"><i class="bi bi-whatsapp"></i></a> +265 999 358 339<br><br>
              <a href="mailto:musicpablo@gmail.com" class="instagram"><i class="bi bi-envelope"></i></a> musicpablo@gmail.com
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Go To</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="../index.php">Home</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Follow Us</h4>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Credits</h4>
            <p>Developed by Roop Repo</p>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Music Pablo</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>