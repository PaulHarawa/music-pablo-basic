<?php 

  include 'conn.php';
  session_start();

	$username = $_SESSION['admin'];
	if (!$username) {
		header("Location: login.php");
	}

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
  <link href="assets/player/music.css" rel="stylesheet">

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
      color: black;
      font-weight: bold;
      text-transform: uppercase;
      font-size: 15px;
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
    .box1{
      text-align: center;
    }
    .box2{
      border-right: 1px solid #18d26e;
    }
    .boxbg{
      background-color: rgba(245, 249, 250);
    }
    .box1 .row:hover{
      color: #18A66E;
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
      text-transform: uppercase;
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
    #topten{
      min-height: 100vh;
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
    .contain{
      text-align: center;
      margin: auto;
    }
    .classX{
      color: #18d26e;
      font-size: 50px;
    }
    #input-field{
      width: 300px;
      height: 30px;
    }
    #story{
      width: 300px;
    }

  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="admin.php">Music Pablo</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
            <ul><li>
              <form action="admin.php" method="POST">
                <button class="btn btn-sm btn-warning" name="logout">Log out</button>
              </form>
                <?php
                  if(isset($_POST['logout'])){
                      session_destroy();
                      session_unset();
                      echo"<script>window.location.href='login.php';</script>";
                  }                  
                ?>
              </li>
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
          <br> 
        </header>

        <div class="row">
          <div class="col-12 box1" data-aos="fade-up" data-aos-delay="100">
              <div class="col-10 contain">
                  <div class="col-12">
                  <p><span class="aotw">Upload A Song</span></p>
                    <form action="admin.php" method="post" enctype="multipart/form-data">
                      <input type="text" name="artist" id="input-field" placeholder="Artist" required> <br><br>
                      <input type="text" name="title" id="input-field" placeholder="Title" required> <br><br>
                      <select name="genre" id="input-field" required>
                        <option value="HipHop">Hip Hop</option>
                        <option value="DanceHall">Dance Hall</option>
                        <option value="Afro">Afro Pop</option>
                        <option value="Gospel">Gospel</option>
                      </select><br><br>
                      <input type="file" name="song" id="input-field" title="song" required><br><br>
                      <input type="file" name="artwork" id="input-field" title="artwork" required> <br><br>
                      <input type="text" name="link" id="input-field" placeholder="Link" required><br><br>
                      <input type="file" name="songLinkDocument" id="input-field" title="Song Link Document" required>
                      <br>
                      <br>
                      <br>
                      <button type="submit" class="btn btn-sm btn-success" name="uploadA">Upload</button>
                    </form>
                    <br>
                  </div>
              </div>
            </div>



            <div class="col-12 box1" data-aos="fade-up" data-aos-delay="100">
              <div class="col-10 contain">
                  <div class="col-12">
                    <br><br>
                  <p><span class="aotw">Artist Of The Week</span></p>
                    <form action="admin.php" method="post" enctype="multipart/form-data">
                      <input type="text" name="artist" id="input-field" placeholder="Artist" required> <br><br>
                      <select name="genre" id="input-field" required>
                        <option value="HipHop">Hip Hop</option>
                        <option value="DanceHall">Dance Hall</option>
                        <option value="Afro">Afro Pop</option>
                        <option value="Gospel">Gospel</option>
                      </select><br><br>
                      <textarea name="story" id="story" cols="35" rows="10" required></textarea>
                      <br>
                      <br>
                      <br>
                      <button type="submit" class="btn btn-sm btn-success" name="uploadB">Update</button>
                    </form>
                    <br>
                  </div>
              </div>
            </div>



            <div class="col-12 box1" data-aos="fade-up" data-aos-delay="100">
              <div class="col-10 contain">
                  <div class="col-12">
                    <br><br>
                  <p><span class="aotw">Artist Profile</span></p>
                    <form action="admin.php" method="post" enctype="multipart/form-data">
                      <input type="text" name="artist" id="input-field" placeholder="Artist" required> <br><br>
                      <input type="text" name="link" id="input-field" placeholder="Link" required> <br><br>
                      <select name="genre" id="input-field" required>
                        <option value="HipHop">Hip Hop</option>
                        <option value="DanceHall">Dance Hall</option>
                        <option value="Afro">Afro Pop</option>
                        <option value="Gospel">Gospel</option>
                      </select><br><br>
                      <input type="file" name="picture" id="input-field" title="picture" required><br><br>
                      <input type="file" name="profileLinkDocument" id="input-field" title="Profile Link Document" required>
                      <br>
                      <br>
                      <br>
                      <button type="submit" class="btn btn-sm btn-success" name="uploadC">Add</button>
                    </form>
                    <br>
                  </div>
              </div>
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

  <?php
  
    if(isset($_POST['uploadA'])){
      $songfile = $_FILES['song']['name'];
      $songTempname = $_FILES['song']['tmp_name'];
      $songDestination = "songs/".$songfile;

      $artworkfile = $_FILES['artwork']['name'];
      $artworkTempname = $_FILES['artwork']['tmp_name'];
      $artworkDestination = "artworks/".$artworkfile;

      $songLinkDocumentName = $_FILES['songLinkDocument']['name'];
      $songLinkDocumentTempName = $_FILES['songLinkDocument']['tmp_name'];
      $songLinkDocumentDestination = "songs/links/".$songLinkDocumentName;

      $artist = $_POST['artist'];
      $title  = $_POST['title'];
      $genre  = $_POST['genre'];
      $link   = $_POST['link'];

      $date = date("y-m-d");
      $time = date("h:i");

      $sql = "INSERT INTO songs(artist,title,genre,song,artwork,time,date,downloads,link) VALUES('$artist','$title','$genre','$songfile','$artworkfile','$time','$date',0,'$link')";
      $result = mysqli_query($conn, $sql);

      if($result){
        move_uploaded_file($songTempname,$songDestination);
        move_uploaded_file($artworkTempname,$artworkDestination);
        move_uploaded_file($songLinkDocumentTempName,$songLinkDocumentDestination);
        echo"<div class='row'><div class='col-12 text-center text-success bg-dark'>Song Uploaded</div></div>";
      }
      else{
        echo"<div class='row'><div class='col-12 text-center text-danger bg-dark'>Song Not Uploaded</div></div>";
      }


    }
  
  ?>

  <?php 
  
    if(isset($_POST['uploadB'])){
      $artist = $_POST['artist'];
      $genre  = $_POST['genre'];
      $story  = $_POST['story'];

      $sql = "UPDATE aotw SET artist='$artist',genre='$genre',story='$story' WHERE id=1";
      $result = mysqli_query($conn,$sql);

      if($result){
        echo"<div class='row'><div class='col-12 text-center text-success bg-dark'>AOTW Updated</div></div>";
      }
      else{
        echo"<div class='row'><div class='col-12 text-center text-danger bg-dark'>AOTW Not updated</div></div>";
      }

    }
  
  ?>

<?php
  
  if(isset($_POST['uploadC'])){

    $picturefile = $_FILES['picture']['name'];
    $pictureTempname = $_FILES['picture']['tmp_name'];
    $pictureDestination = "artists/pictures/".$picturefile;

    $profileLinkDocumentName = $_FILES['profileLinkDocument']['name'];
    $profileLinkDocumentTempname = $_FILES['profileLinkDocument']['tmp_name'];
    $profileLinkDocumentDestination = "artists/".$profileLinkDocumentName;

    $artist = $_POST['artist'];
    $link  = $_POST['link'];
    $genre  = $_POST['genre'];

    $sql = "INSERT INTO artists(artist,link,genre,picture) VALUES('$artist','$link','$genre','$picturefile')";
    $result = mysqli_query($conn, $sql);

    if($result){
      move_uploaded_file($pictureTempname,$pictureDestination);
      move_uploaded_file($profileLinkDocumentTempname,$profileLinkDocumentDestination);
      echo"<div class='row'><div class='col-12 text-center text-success bg-dark'>Profile Uploaded</div></div>";
    }
    else{
      echo"<div class='row'><div class='col-12 text-center text-danger bg-dark'>Profile Not Uploaded</div></div>";
    }


  }

?>

  <!-- ======= Footer ======= -->
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets/player/music.js"></script>
  <script src="assets/player/play.js"></script>
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