<?php include 'pages/head.php'; ?>

<!-- navbar.php -->
<header class="site-navbar py-3 js-site-navbar site-navbar-target" role="banner" id="site-navbar">
  <div class="row align-items-center" style="margin-left: 50px;">
    <div class="col-11 col-xl-2 site-logo">
      <h1 class="mb-0">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
          <img src="1.jpg" alt="Logo" width="60" height="60" class="me-2 rounded-circle">
          <span style="font-size:28px;" class="text-danger">Royal Express</span>
        </a>
      </h1>
    </div>
    <div class="col-12 col-md-10 d-none d-xl-block">
      <nav class="site-navigation position-relative text-right" role="navigation">
        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
          <li><a href="index.php#section-home" class="nav-link text-danger">Home</a></li>
          <li><a href="index.php#section-about" class="nav-link text-danger">About Us</a></li>
          <li><a href="index.php#section-gallery" class="nav-link text-danger">Gallery</a></li>
          <li><a href="index.php#section-contact" class="nav-link text-danger">Contact</a></li>
          <?php if (isset($_SESSION['customer'])) : ?>
            <li><a href="tracking.php" class="nav-link text-danger">Tracking</a></li>
            <li><a href="request.php" class="nav-link text-danger">Request</a></li>
            <li class="nav-item dropdown" style="margin-left: 200px;">
              <a class="nav-link dropdown-toggle" href="#" id="accMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accMenu">
                <a class="dropdown-item" href="profile.php"><i class="fas fa-user-circle"></i> My Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="admin/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
              </div>
            </li>
          <?php else : ?>
            <li><a href="Admin/login.php" class="nav-link text-danger">Login</a></li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>
    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3">
      <a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a>
    </div>
  </div>
</header>
  <div class="site-blocks-cover overlay" style="background-image: url(<?php echo $header_src; ?>);" data-aos="fade" data-stellar-background-ratio="0.5" id="section-home">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


          <h1 class="text-white font-weight-light text-uppercase font-weight-bold" data-aos="fade-up"><?php echo $res['header_title']; ?></h1>
          <p class="mb-5" data-aos="fade-up" data-aos-delay="100"><?php echo $res['header_desc']; ?></p>
          <p data-aos="fade-up" data-aos-delay="200"><a href="request.php" class="btn btn-primary py-3 px-5 text-white">Get Started!</a></p>

        </div>
      </div>
    </div>
  </div>

 