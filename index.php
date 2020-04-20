<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title -->
  <title>KKA - UKMC</title>

  <!-- Favicon -->
  <link rel="icon" href="img\favicon.png" />

  <!-- Stylesheet -->
  <link rel="stylesheet" href="css\y-style.css" />
  <link rel="stylesheet" href="css\toggle-style.css" />

  <!-- font -->
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&display=swap"
    rel="stylesheet">

</head>

<Body>
  <!-- Database Connection -->
  <?php
  // Remove meize in order real online directory
  define('__ROOT__', dirname(dirname(__FILE__)));

  ?>

  <!-- Navigation -->
  <nav>
    <!-- Top Navigation Bar -->
    <div class="y-logo">
      <img src="svg/logo-background.svg" alt="Logo Background">
      <img src="img/ukmc.png" alt="Logo Ukmc">  
    </div>

    <div class="y-block y-block--secondary y-nav-top y-space-between">
        <ul class="y-no-decor y-flex-center y-top-links">
          <li><a href="#">ukmc.ac.id</a></li>
          <li><a href="#">akademik.ukmc.ac.id</a></li>
          <li><a href="#">ika.ukmc.ac.id</a></li>
          <li><a href="#">sakm.ukmc.ac.id</a></li>
          <li><a href="#">SIMKATMAWA</a></li>
        </ul>

        <div class='y-no-decor y-flex-center'>
          <a href="#" class=>Register</a>
          <a href="#" class="y-login-button">LOGIN</a>
        </div>
    </div>
    
    <!-- Brand Name -->
    <div class=" y-block y-block--primary ">
      <div class="y-nav-bot y-flex-center y-space-between">
        <div class="y-brand">
          <div class="y-brand1">KEMAHASISWAAN &<br/>ALUMNI</div>
          <div class="y-brand2">UNIVERSITAS KATOLIK MUSI CHARITAS</div>
        </div>

        <div class="y-nav-bot--menu y-space-between y-flex-column y-flex-end">
          <div class="y-display-flex ">
            <form action="#">
              <div class="switch-wrapper">
                <label class="switch switch-yes-no">
                  <input class="switch-input" type="checkbox" />
                  <span class="switch-label" data-on="Dark Mode" data-off="Light Mode"></span> 
                  <span class="switch-handle"></span> 
                </label>
                <div class="y-nav-search">
                  <form action="#">
                    <input class="search-box" type="text" name="search" id="search">
                    <input class="search-btn" type="submit" value="SEARCH">
                  </form>
                </div>
              </div>
            </form>
          </div>

          <div>
            <ul class="y-no-decor y-flex-center y-top-links y-menu--links">
              <li><a href="#">Berita & Pengumuman</a></li>
              <li><a href="#">Kegiatan Kemahasiswaan</a></li>
              <li><a href="#">Pusat Karir</a></li>
              <li><a href="#">Forum</a></li>
              <li><a href="#">Bantuan</a></li>
            </ul>
          </div>
        </div>
      </div>  
    </div>
  </nav>
  <!-- <script src="js\bootstrap.bundle.js"></script> -->
</body>

</html>