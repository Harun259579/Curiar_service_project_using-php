<!DOCTYPE html>
<html lang="en">
<?php include 'pages/head.php'; ?>



<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">

  <!-- <div class="site-wrap"> -->

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <header class="site-navbar py-3 js-site-navbar site-navbar-target" role="banner" id="site-navbar">

    <!-- <div class="container"> -->
      <div class="row align-items-center"  style="margin-left: 50px;">

        <div class="col-11 col-xl-2 site-logo">
          <h1 class="mb-0">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="1.jpg" alt="Logo" width="60" height="60" 
           class="me-2 rounded-circle">
      <span style="font-size:28px;">Royal Express</span>
    </a>

          </h1>
        </div>
        <div class="col-12 col-md-10 d-none d-xl-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
              <li><a href="#section-home" class="nav-link">Home</a></li>
              <li>
                <a href="#section-about" class="nav-link">About Us</a>
              </li>
              <li><a href="#section-gallery" class="nav-link">Gallery</a></li>
              <li><a href="#section-contact" class="nav-link">Contact</a></li>
              <?php if (isset($_SESSION['customer'])) : ?>
                <!-- <li><a href="profile.php" class="nav-link">Profile</a></li>
                <li><a href="tracking.php" class="nav-link">Tracking</a></li>
                <li><a href="admin/logout.php" class="nav-link">Logout</a></li> -->
                <li><a href="tracking.php" class="nav-link">Tracking</a></li>
                <li><a href="request.php" class="nav-link">Request</a></li>
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
                <li><a href="Admin/login.php" class="nav-link">Login</a></li>
              <?php endif; ?>
              
            </ul>
          </nav>
        </div>


        <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>

      </div>

    </div>
    </div>

  </header>
  <!-- Hero Section Overlay Marquee -->
<div class="marquee-container position-absolute w-100" style="top: 100px; z-index: 10; overflow: hidden;">
  <div class="marquee-text text-white font-weight-bold" style="white-space: nowrap; font-size: 18px;">
 Delivery outside Dhaka within 48 hours!,
  Parcel delivery inside Dhaka within 24 hours!
  </div>
</div>





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
    
   
    <!-- Tracking Section Start -->
  <div class="site-section bg-light" id="section-tracking" style="margin-top:-200px">
    <div class="container">
      

      <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="tracking.php" method="get" class="p-5 bg-white shadow">
            <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
          <h2 class="font-weight-light text-primary">Parcel Tracking</h2>
          <p class="color-black-opacity-5">Enter your Tracking ID to check status</p>
        </div>
      </div>
            <div class="input-group">
              <input type="text" name="track_id" class="form-control" placeholder="Enter Tracking ID" required>
              <button type="submit" class="btn btn-primary px-4">Track</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- Tracking Section End -->

  <div class=" container my-5" >
  <div class="row g-4">

    <!-- Card 1 -->
    <div class="col-md-3">
      <div class="card h-100 shadow-sm">
        <img src="uploads/animation/img1.jpg" class="card-img-top" alt="Express Delivery">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Express Delivery</h5>
          <p class="card-text">Fast delivery inside Dhaka within 24 hours. Reliable and secure service for your parcels.</p>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3">
      <div class="card h-100 shadow-sm">
        <img src="uploads/animation/img2.jpg" class="card-img-top" alt="Outside Dhaka Delivery">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Outside Dhaka Delivery</h5>
          <p class="card-text">Delivery across Bangladesh within 48 hours. Track your parcel easily using our tracking system.</p>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3">
      <div class="card h-100 shadow-sm">
        <img src="uploads/animation/img3.jpg" class="card-img-top" alt="Secure Parcel Service">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Secure Parcel Service</h5>
          <p class="card-text">We ensure safe and secure handling of your parcels with insurance options available.</p>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
      <div class="col-md-3">
      <div class="card h-100 shadow-sm">
        <img src="uploads/animation/img4.jpg" class="card-img-top" alt="Same Day Delivery">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Same Day Delivery</h5>
          <p class="card-text">For urgent parcels within Dhaka, get same day delivery with our premium service.</p>
        </div>
      </div>
    </div>

  </div>
</div>
<!--card end-->


  <div class="site-section" id="section-about">
    <div class="container">
      <div class="row mb-5">

        <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade-up" data-aos-delay="100">
          <img src="<?php echo $about_src; ?>" alt="Image" class="img-fluid rounded">
        </div>
        <div class="col-md-6 order-md-1" data-aos="fade-up">
          <div class="text-left pb-1 border-primary mb-4">
            <h2 class="text-primary"><?php echo $res['about_title']; ?></h2>
          </div>
          <p><?php echo $res['about_desc']; ?></p>
        </div>

      </div>
    </div>
  </div>


  <div class="site-section block-13" id="section-gallery" style="margin-top:-100px">

    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
          <h2 class="mb-0 text-primary">Gallery</h2>
        </div>
      </div>
    </div>

    <div class="owl-carousel nonloop-block-13">
      <?php
      $getall = getAllgalleryImages();
      while ($row = mysqli_fetch_assoc($getall)) {
        $img = $row['gallery_image'];
        $img_src = "server/uploads/gallery/" . $img; ?>
        <div>
          <a href="#" class="unit-1 text-center">
            <img src="<?php echo $img_src; ?>" alt="Image" class="img-fluid">
            <div class="unit-1-text">
            </div>
          </a>
        </div>
      <?php } ?>

    </div>
  </div>


  <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(<?php echo $background_image_src; ?>); background-attachment: fixed;">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">


      </div>
    </div>
  </div>


  <div class="site-section bg-light" id="section-contact">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
          <h2 class="font-weight-light text-primary">Contact Us</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7 mb-5">



          <form action="#" class="p-5 bg-white" method="post">


            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="text-black" for="fname">Name</label>
                <input type="text" name="name" id="name" class="form-control">
              </div>
            </div>

            <div class="row form-group">

              <div class="col-md-12">
                <label class="text-black" for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
              </div>
            </div>

            <div class="row form-group">

              <div class="col-md-12">
                <label class="text-black" for="subject">Subject</label>
                <input type="subject" name="subject" id="subject" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="message">Message</label>
                <textarea name="message" name="message" id="message" cols="30" rows="4" class="form-control"></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <input type="button" onclick="addContactMessage(this.form)" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
              </div>
            </div>


          </form>
        </div>
        <div class="col-md-5">

          <div class="p-4 mb-3 bg-white">
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4"><?php echo $res['company_address']; ?></p>

            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="#"><?php echo $res['company_phone']; ?></a></p>

            <p class="mb-0 font-weight-bold">Email Address</p>
            <p class="mb-0"><a href="#"><?php echo $res['company_email']; ?></a></p>

          </div>

        </div>
      </div>
    </div>
  </div>

  <?php include 'pages/footer.php'; ?>
  <!-- </div> -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>


</body>

</html>
<style>
  .marquee-container {
    overflow: hidden;
    position: relative;
  }
  .marquee-text {
    display: inline-block;
    padding-left: 100%; /* Start outside from right */
    animation: marquee 15s linear infinite; /* Adjust speed here */
  }

  @keyframes marquee {
    0% { transform: translateX(0%); }
    100% { transform: translateX(-100%); }
  }

  .card {
  border-radius: 15px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.card-img-top {
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
  height: 200px;
  object-fit: cover;
}

</style>